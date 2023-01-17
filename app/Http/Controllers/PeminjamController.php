<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peminjam;
use Illuminate\Contracts\View\View;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\StorePeminjamRequest;
use App\Http\Requests\UpdatePeminjamRequest;
use App\Models\Jaminan;
use App\Models\Surat_Perjanjian;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View(
            'peminjam.peminjam',
            [
                'peminjam' => Peminjam::where('status', '1')->orderBy('id', 'DESC')->get(),
                'title' => 'Data Peminjam'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View(
            'peminjam.tambah-peminjam',
            [
                'title' => 'Tambah Peminjam',
                'pegawai' => User::where([['username', '!=', 'admin'], ['status', '1']])->orderBy('id', 'DESC')->get()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeminjamRequest $request)
    {
        // $bunga
        $data_peminjam = [
            'nama_peminjam' => $request->nama_peminjam,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'nominal_pinjaman' => $request->nominal_pinjaman,
            'waktu_pelunasan' => $request->waktu_pelunasan,
            'total_pinjaman' => $request->total_pinjaman,
            'jumlah_jaminan' => $request->jumlah_jaminan,
            'bunga' => $request->bunga,
            'angsuran' => $request->angsuran,
        ];
        Peminjam::create($data_peminjam);

        $data_jaminan = [
            'peminjam_id' => Peminjam::orderBy('id', 'DESC')->get()[0]->id,
            'roda' => $request->roda,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'nomor_polisi' => $request->nomor_polisi,
            'nomor_rangka' => $request->nomor_rangka,
            'nomor_mesin' => $request->nomor_mesin,
            'nomor_bpkb' => $request->nomor_bpkb,
            'atas_nama' => $request->atas_nama
        ];
        Jaminan::create($data_jaminan);

        $surat = [
            'nomor_surat' => 'A/4/ABC/02.PK/2023',
            'peminjam_id' => Peminjam::orderBy('id', 'DESC')->get()[0]->id,
            'user_id' => $request->user_id,
            'tanggal_pembuatan' => Carbon::now(),
            'saksi_1' => $request->saksi_1,
            'saksi_2' => $request->saksi_2
        ];
        Surat_Perjanjian::create($surat);

        return redirect(Route('peminjam.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjam $peminjam)
    {
        return View(
            'peminjam.edit-peminjam',
            [
                'title' => 'Edit Peminjam',
                'peminjam' => $peminjam,
                'pegawai' => User::where([['username', '!=', 'admin'], ['status', '1']])->orderBy('id', 'DESC')->get(),
                'jaminan' => Jaminan::find($peminjam->id)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamRequest  $request
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeminjamRequest $request, Peminjam $peminjam)
    {
        $data_peminjam = [
            'nama_peminjam' => $request->nama_peminjam,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'nominal_pinjaman' => $request->nominal_pinjaman,
            'waktu_pelunasan' => $request->waktu_pelunasan,
            'total_pinjaman' => $request->total_pinjaman,
            'jumlah_jaminan' => $request->jumlah_jaminan,
            'bunga' => $request->bunga,
            'angsuran' => $request->angsuran,
        ];
        $peminjam->update($data_peminjam);

        $data_jaminan = [
            'roda' => $request->roda,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'nomor_polisi' => $request->nomor_polisi,
            'nomor_rangka' => $request->nomor_rangka,
            'nomor_mesin' => $request->nomor_mesin,
            'nomor_bpkb' => $request->nomor_bpkb,
            'atas_nama' => $request->atas_nama,
        ];
        $peminjam->jaminan[0]->update($data_jaminan);

        $surat = [
            'user_id' => $request->user_id,
            'saksi_1' => $request->saksi_1,
            'saksi_2' => $request->saksi_2
        ];
        $peminjam->surat_perjanjian[0]->update($surat);

        return redirect(Route('peminjam.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjam::where('id', $id)->update(['status' => '0']);
        return redirect(Route('peminjam.index'));
    }
}
