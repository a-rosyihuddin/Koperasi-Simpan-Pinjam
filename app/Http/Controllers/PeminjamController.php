<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peminjam;
use Illuminate\Contracts\View\View;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\StorePeminjamRequest;
use App\Http\Requests\UpdatePeminjamRequest;
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
            'peminjam',
            [
                'peminjam' => Peminjam::orderBy('id', 'DESC')->get(),
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
            'tambah-peminjam',
            [
                'title' => 'Tambah Peminjam',
                'pegawai' => User::where('username', '!=', 'admin')->get()
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
        $data = [
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
        Peminjam::create($data);

        $surat = [
            'nomor_surat' => 'A/4/ABC/02.PK/2023',
            'peminjam_id' => Peminjam::orderBy('id', 'DESC')->get()[0]->id,
            'user_id' => $request->user_id,
            'tanggal_pembuatan' => Carbon::now(),
            'saksi_1' => $request->saksi_1,
            'saksi_2' => $request->saksi_2
        ];
        Surat_Perjanjian::create($surat);
        return redirect('/peminjam');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjam $peminjam)
    {
        Peminjam::destroy($peminjam->id);
        return redirect(Route('peminjam.index'));
    }
}
