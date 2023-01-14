@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Data Peminjam</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"
                                        aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Tanggal
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder col-3">
                                            Alamat
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Pekerjaan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Nominal Pinjaman
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Waktu Pelunasan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Total Pinjaman
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Jumlah Jaminan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Surat
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($peminjam->surat_perjanjian) --}}
                                    @foreach ($peminjam as $pj)
                                        {{-- @dd($pj->surat_perjanjian::first()) --}}
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center"
                                                    style="padding-left: 0.2cm">
                                                    <h6 class="mb-0 text-sm">
                                                        {{ $pj->surat_perjanjian[0]->tanggal_pembuatan }}
                                                    </h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center"
                                                        style="padding-left: 0.2cm">
                                                        <h6 class="mb-0 text-sm">{{ $pj->nama_peminjam }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-sm">{{ $pj->alamat }}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="font-weight-bold mb-0 text-sm">{{ $pj->pekerjaan }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="font-weight-bold mb-0 text-sm">Rp.
                                                    {{ number_format($pj->nominal_pinjaman, 2, ',', '.') }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="font-weight-bold mb-0 text-sm">{{ $pj->waktu_pelunasan }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="font-weight-bold mb-0 text-sm">Rp.
                                                    {{ number_format($pj->total_pinjaman, 2, ',', '.') }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="font-weight-bold mb-0 text-sm">{{ $pj->jumlah_jaminan }} Unit
                                                    Kendaraan</span> <br>
                                                <a class="btn badge badge-sm bg-gradient-info"
                                                    href="javascript:;">Detail</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a class="btn btn-link text-dark text-sm mb-0 px-0"
                                                    href="/surat/{{ $pj->id }}">
                                                    <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                                                    PDF</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                        class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
                                                </a>
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i class="far fa-trash-alt me-2"
                                                        aria-hidden="true"></i>Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
