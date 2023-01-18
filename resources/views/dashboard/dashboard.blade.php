@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Uang Keluar</p>
                                    <h5 class="font-weight-bolder">
                                        RP. {{ number_format($peminjam_all->sum('nominal_pinjaman'), 2, ',', '.') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Jaminan</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $peminjam_all->sum('jumlah_jaminan') }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Peminjam</p>
                                    <h5 class="font-weight-bolder">
                                        {{ count($peminjam_all) }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row mb-0">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Data Peminjam jatuh Tempo Pada {{ $today }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder col-3">
                                            Alamat
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Tanggal Pembuatan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Tanggal Pelunasan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Detail Pinjaman
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($peminjam) == 0)
                                        <tr>
                                            <td colspan="10">
                                                <div class="d-flex flex-column justify-content-center"
                                                    style="padding-left: 0.2cm">
                                                    <h6 class="mb-0 m-2 text-sm text-center">Tidak Ada Data Peminjam
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($peminjam as $pj)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center"
                                                            style="padding-left: 0.2cm">
                                                            <h6 class="mb-0 text-sm">{{ $pj->nama_peminjam }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="font-weight-bold mb-0 text-sm text-center">
                                                        {{ $pj->alamat }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-bold mb-0 text-sm text-center">
                                                        {{ $pj->surat_perjanjian[0]->tanggal_pembuatan }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="font-weight-bold mb-0 text-sm text-center">
                                                        {{ $pj->waktu_pelunasan }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="btn badge badge-sm bg-gradient-info mb-0"
                                                        href="{{ Route('detailDashboard', $pj->id) }}">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
