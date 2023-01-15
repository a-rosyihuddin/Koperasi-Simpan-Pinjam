@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Detail Peminjam</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-primary mb-0" href="{{ Route('peminjam.index') }}">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ Route('peminjam.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                        <input type="text" class="form-control" placeholder="Nama Saksi I"
                                            aria-label="Nama" name="nama_pegawai"
                                            value="{{ $peminjam->surat_perjanjian[0]->user->nama_pegawai }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="saksi_1">Saksi I</label>
                                        <input type="text" class="form-control" placeholder="Nama Saksi I"
                                            aria-label="Nama" name="saksi_1"
                                            value="{{ $peminjam->surat_perjanjian[0]->saksi_1 }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="saksi_2">Saksi II</label>
                                        <input type="text" class="form-control" placeholder="Nama Saksi II"
                                            aria-label="Nama" name="saksi_2"
                                            value="{{ $peminjam->surat_perjanjian[0]->saksi_2 }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_peminjam">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama Peminjam"
                                            aria-label="Nama" name="nama_peminjam" value="{{ $peminjam->nama_peminjam }}"
                                            disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat"
                                            name="alamat" value="{{ $peminjam->alamat }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control"
                                            placeholder="Pekerjaan"aria-label="pekerjaan" name="pekerjaan"
                                            value="{{ $peminjam->pekerjaan }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nominal_pinjaman">Nominal Pinjaman</label>
                                        <input type="number" class="form-control"
                                            placeholder="Nominal Pinjaman"aria-label="nominal_pinjaman"
                                            name="nominal_pinjaman" value="{{ $peminjam->nominal_pinjaman }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu_pelunasan">Waktu Pelunasan</label>
                                        <input type="number" class="form-control"
                                            placeholder="Teanggat Waktu Pelunasan Hutang Berapa Bulan"aria-label="waktu_pelunasan"
                                            name="waktu_pelunasan" value="{{ $peminjam->waktu_pelunasan }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="total_pinjaman">Total Pinjaman</label>
                                        <input type="number" class="form-control"
                                            placeholder="Total Pinjaman"aria-label="total_pinjaman" name="total_pinjaman"
                                            value="{{ $peminjam->total_pinjaman }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah_jaminan">Jumlah Jaminan</label>
                                        <input type="number" class="form-control"
                                            placeholder="Berapa Unit Kendaraan Yang Digunakan Sebagai Jaminan"aria-label="jumlah_jaminan"
                                            name="jumlah_jaminan" value="{{ $peminjam->jumlah_jaminan }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bunga">Bunga</label>
                                        <input type="number" step="0.01" class="form-control"
                                            placeholder="Berapa Persen Bunga"aria-label="bunga" name="bunga"
                                            value="{{ $peminjam->bunga }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="angsuran">Angsuran</label>
                                        <input type="number" class="form-control"
                                            placeholder="Berapa Bulan Untuk Setiap Angsuran"aria-label="angsuran"
                                            name="angsuran" value="{{ $peminjam->angsuran }}" disabled>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
