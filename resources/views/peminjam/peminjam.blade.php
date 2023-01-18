@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center">
                                <div class="input-group">
                                    <span class="input-group-text text-body "><i class="fas fa-search"
                                            aria-hidden="true"></i></span>
                                    <input type="text" id="search-peminjam" class="form-control"
                                        placeholder="Type here...">
                                </div>
                            </div>
                            <div class="col-9 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="{{ Route('peminjam.create') }}"><i
                                        class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
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
                                            Pekerjaan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Tanggal Pembuatan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Pegawai
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Saksi I
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Saksi II
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Detail Pinjaman
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Surat
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($peminjam) == 0)
                                        <tr>
                                            <td colspan="10">
                                                <div class="d-flex flex-column justify-content-center"
                                                    style="padding-left: 0.2cm">
                                                    <h6 class="mb-0 m-2 text-sm text-center">Tidak Ada Data Peminjam</h6>
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
                                                    <p class="font-weight-bold mb-0 text-sm text-center">{{ $pj->alamat }}
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="font-weight-bold mb-0 text-sm">{{ $pj->pekerjaan }}</p>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center"
                                                        style="padding-left: 0.2cm">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $pj->surat_perjanjian[0]->tanggal_pembuatan }}
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="font-weight-bold mb-0 text-sm">{{ $pj->surat_perjanjian[0]->user->nama_pegawai }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="font-weight-bold mb-0 text-sm">{{ $pj->surat_perjanjian[0]->saksi_1 }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="font-weight-bold mb-0 text-sm">
                                                        {{ $pj->surat_perjanjian[0]->saksi_2 }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="btn badge badge-sm bg-gradient-info mb-0"
                                                        href="{{ Route('detail_peminjam', $pj->id) }}">Detail</a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="btn btn-link text-dark text-sm mb-0 px-0"
                                                        href="/surat/{{ $pj->id }}">
                                                        <i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i>
                                                        PDF</a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="btn btn-link text-dark px-3 mb-0"
                                                        href="{{ Route('peminjam.edit', $pj->id) }}"><i
                                                            class="fas fa-pencil-alt text-dark me-2"
                                                            aria-hidden="true"></i>Edit
                                                    </a>
                                                    <form action="{{ Route('peminjam.destroy', $pj->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                            href=""><i class="far fa-trash-alt me-2"
                                                                aria-hidden="true"></i>Delete
                                                        </button>
                                                    </form>
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
