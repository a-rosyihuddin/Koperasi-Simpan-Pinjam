@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Tambah Peminjam</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-primary mb-0" href="/">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form role="form" method="POST" action="/">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" aria-label="Name"
                                            name="nama" value="{{ old('nama') }}" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat"
                                            name="alamat" value="{{ old('alamat') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control"
                                            placeholder="Pekerjaan"aria-label="pekerjaan" name="pekerjaan"
                                            value="{{ old('pekerjaan') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nominal_pinajaman">Nominal Pinjaman</label>
                                        <input type="number" class="form-control"
                                            placeholder="Nominal Pinjaman"aria-label="nominal_pinajaman"
                                            name="nominal_pinajaman" value="{{ old('nominal_pinjaman') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu_pelunasan">Waktu Pelunasan</label>
                                        <input type="date" class="form-control"
                                            placeholder="Teanggat Waktu Pelunasan Hutang"aria-label="waktu_pelunasan"
                                            name="waktu_pelunasan" value="{{ old('waktu_pelunasan') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="total_pinjaman">Total Pinjaman</label>
                                        <input type="text" class="form-control"
                                            placeholder="Total Pinjaman"aria-label="total_pinjaman" name="total_pinjaman"
                                            value="{{ old('total_pinjaman') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah_jaminan">Jumlah Jaminan</label>
                                        <input type="text" class="form-control"
                                            placeholder="Berapa Unit Kendaraan Yang Digunakan Sebagai Jaminan"aria-label="jumlah_jaminan"
                                            name="jumlah_jaminan" value="{{ old('jumlah_jaminan') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bunga">Bunga</label>
                                        <input type="text" class="form-control"
                                            placeholder="Berapa Persen Bunga"aria-label="bunga" name="bunga"
                                            value="{{ old('bunga') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="angsuran">Angsuran</label>
                                        <input type="text" class="form-control"
                                            placeholder="Berapa Bulan Untuk Setiap Angsuran"aria-label="angsuran"
                                            name="angsuran" value="{{ old('angsuran') }}" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah</button>
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
