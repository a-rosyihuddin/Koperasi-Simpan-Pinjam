<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Jaminan;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratContrroller extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        return back()->withErrors(['loginError' => 'Username Atau Password Salah']);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect()->route('login');
    }

    private function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $libs = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $n = "";

        if ($nilai < 12) {
            $n = " " . $libs[$nilai];
        } else if ($nilai < 20) {
            $n = self::penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $n = self::penyebut($nilai / 10) . " puluh" . self::penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $n = " seratus" . self::penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $n = self::penyebut($nilai / 100) . " ratus" . self::penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $n = " seribu" . self::penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $n = self::penyebut($nilai / 1000) . " ribu" . self::penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $n = self::penyebut($nilai / 1000000) . " juta" . self::penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $n = self::penyebut($nilai / 1000000000) . " milyar" . self::penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $n = self::penyebut($nilai / 1000000000000) . " trilyun" . self::penyebut(fmod($nilai, 1000000000000));
        }
        return $n;
    }

    public function pembilang($nilai)
    {
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return $hasil;
    }

    public  function diffInMonths(\DateTime $date1, \DateTime $date2)
    {
        $diff =  $date1->diff($date2);

        $months = $diff->y * 12 + $diff->m + $diff->d / 30;

        return (int) round($months);
    }


    public function surat(Peminjam $peminjam)
    {


        // setlocale(LC_ALL, 'IND');
        $waktu_pembuatan = new DateTime($peminjam->surat_perjanjian[0]->tanggal_pembuatan);
        $waktu_pelunasan = new DateTime($peminjam->waktu_pelunasan);
        $pelunasan = $this->diffInMonths($waktu_pelunasan, $waktu_pembuatan);
        // dd($this->diffInMonths($waktu_pelunasan, $waktu_pembuatan));
        return View(
            'surat-perjanjian',
            [
                'data' => $peminjam,
                'terbilang_nominal' => ucwords($this->pembilang($peminjam->nominal_pinjaman)),
                'waktu_pelunasan' => ucwords($pelunasan),
                'terbilang_waktu_pelunasan' => ucwords($this->pembilang($pelunasan)),
                'terbilang_jumlah_jaminan' => ucwords($this->pembilang($peminjam->jumlah_jaminan)),
                'today' => Carbon::now()->translatedFormat('d F Y'),
                'terbilang_angsuran' => ucwords($this->pembilang($peminjam->angsuran)),
                'terbilang_total_pinjaman' => ucwords($this->pembilang($peminjam->total_pinjaman)),
                'terbilang_roda' => ucwords($this->pembilang($peminjam->jaminan[0]->roda)),
            ]
        );
    }

    public function detail(Peminjam $peminjam)
    {
        // dd(Peminjam::where('id', $peminjam->id));
        return View(
            'peminjam.detail-peminjam',
            [
                'title' => 'Detail Peminjam',
                'peminjam' => Peminjam::find($peminjam->id),
                'jaminan' => Jaminan::where('peminjam_id', $peminjam->id)->get()[0]
            ]
        );
    }

    public function dashboard()
    {
        $today = Carbon::now();
        return View(
            'dashboard.dashboard',
            [
                'title' => 'Dashboard',
                'today' => $today->translatedFormat('d F Y'),
                'peminjam' => Peminjam::where([['status', '1'], ['waktu_pelunasan', '<=', $today]])->orderBy('id', 'DESC')->get(),
                'peminjam_all' => Peminjam::where([['status', '1']])->orderBy('id', 'DESC')->get()
            ]
        );
    }

    public function detailDashboard(Peminjam $peminjam)
    {

        return View(
            'dashboard.detail-peminjam',
            [
                'title' => 'Detail Peminjam',
                'peminjam' => Peminjam::find($peminjam->id),
                'jaminan' => Jaminan::where('peminjam_id', $peminjam->id)->get()[0]
            ]
        );
    }
}
