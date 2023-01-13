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
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder ps-2">
                                            Alamat
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Pekerjaan
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            Nominal Pinjaman
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
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center"
                                                    style="padding-left: 0.2cm">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold mb-0 text-sm">Jalan Air Langga Nomor 4 RT 02 RW 01
                                                Desa Ngawen Kecamatan Sidayu Kabupaten Gresik</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="font-weight-bold mb-0 text-sm">Mahasiswa</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="font-weight-bold mb-0 text-sm">Rp.
                                                2.000.000</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="font-weight-bold mb-0 text-sm">1 Unit Kendaraan</span> <br>
                                            <a class="btn badge badge-sm bg-gradient-info" href="javascript:;">Detail</a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;">
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
                                    {{-- <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center"
                                                    style="padding-left: 0.2cm">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold mb-0 text-sm">Gresik</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="font-weight-bold mb-0 text-sm">Buruh Tani</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="font-weight-bold mb-0 text-sm">Rp.
                                                5.000.000</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="font-weight-bold mb-0 text-sm">2 Unit Kendaraan</span> <br>
                                            <a class="btn badge badge-sm bg-gradient-info" href="javascript:;">Detail</a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" href="javascript:;">
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
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                {{-- <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold"
                            target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            </div>
        </footer>
    </div>
@endsection
