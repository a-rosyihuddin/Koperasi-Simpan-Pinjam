@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Edit Peminjam</h6>
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
                                <form role="form" method="POST" action="{{ Route('peminjam.update', $peminjam->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nomor_surat">Nomor Surat</label>
                                        <input type="text" class="form-control" placeholder="Nomor Surat"
                                            aria-label="Nomor Surat" name="nomor_surat"
                                            value="{{ $peminjam->surat_perjanjian[0]->nomor_surat }}" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                        <select class="form-control custom-select my-1 mr-sm-2" name="user_id" autofocus>
                                            <option>Pilih...</option>
                                            @foreach ($pegawai as $pg)
                                                @if (old('user_id') == $pg->id or $peminjam->surat_perjanjian[0]->user_id == $pg->id)
                                                    <option selected value="{{ $pg->id }}">{{ $pg->nama_pegawai }}
                                                    </option>
                                                @else
                                                    <option value="{{ $pg->id }}">{{ $pg->nama_pegawai }}
                                                @endif
                                            @endforeach
                                        </select>
                                        <div class="mb-3">
                                            <label for="saksi_1">Saksi I</label>
                                            <input type="text" class="form-control" placeholder="Nama Saksi I"
                                                aria-label="Nama" name="saksi_1"
                                                value="{{ $peminjam->surat_perjanjian[0]->saksi_1 }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="saksi_2">Saksi II</label>
                                            <input type="text" class="form-control" placeholder="Nama Saksi II"
                                                aria-label="Nama" name="saksi_2"
                                                value="{{ $peminjam->surat_perjanjian[0]->saksi_2 }}" required>
                                        </div>

                                        <h5 class="pt-4 text-uppercase text-center">Data Peminjam
                                        </h5>
                                        <div class="mb-3">
                                            <label for="nama_peminjam">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama Peminjam"
                                                aria-label="Nama" name="nama_peminjam"
                                                value="{{ $peminjam->nama_peminjam }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat"
                                                aria-label="Alamat" name="alamat" value="{{ $peminjam->alamat }}"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Pekerjaan"aria-label="pekerjaan" name="pekerjaan"
                                                value="{{ $peminjam->pekerjaan }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nominal_pinjaman">Nominal Pinjaman</label>
                                            <input type="number" class="form-control"
                                                placeholder="Nominal Pinjaman"aria-label="nominal_pinjaman"
                                                name="nominal_pinjaman" value="{{ $peminjam->nominal_pinjaman }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="waktu_pelunasan">Waktu Pelunasan</label>
                                            <input type="date" class="form-control"
                                                placeholder="Teanggat Waktu Pelunasan Hutang Berapa Bulan"aria-label="waktu_pelunasan"
                                                name="waktu_pelunasan" value="{{ $peminjam->waktu_pelunasan }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="total_pinjaman">Total Pinjaman</label>
                                            <input type="number" class="form-control"
                                                placeholder="Total Pinjaman"aria-label="total_pinjaman"
                                                name="total_pinjaman" value="{{ $peminjam->total_pinjaman }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah_jaminan">Jumlah Jaminan</label>
                                            <input type="number" class="form-control"
                                                placeholder="Berapa Unit Kendaraan Yang Digunakan Sebagai Jaminan"aria-label="jumlah_jaminan"
                                                name="jumlah_jaminan" value="{{ $peminjam->jumlah_jaminan }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="bunga">Bunga</label>
                                            <input type="number" step="0.01" class="form-control"
                                                placeholder="Berapa Persen Bunga"aria-label="bunga" name="bunga"
                                                value="{{ $peminjam->bunga }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="angsuran">Angsuran</label>
                                            <input type="number" class="form-control"
                                                placeholder="Berapa Bulan Untuk Setiap Angsuran"aria-label="angsuran"
                                                name="angsuran" value="{{ $peminjam->angsuran }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ketentuan">Ketentuan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Ketentuan"aria-label="ketentuan" name="ketentuan"
                                                value="{{ $peminjam->ketentuan }}" required>
                                        </div>

                                        <h5 class="pt-4 text-uppercase text-center">Jaminan
                                            Hutang
                                        </h5>
                                        <div class="mb-3">
                                            <label for="atas_nama">Atas Nama Kendaraan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Atas Nama Kendaraan"aria-label="atas_nama" name="atas_nama"
                                                value="{{ $jaminan->atas_nama }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roda">Roda Kendaraan</label>
                                            <input type="number" class="form-control"
                                                placeholder="Jumlah Roda Kendaraan"aria-label="roda" name="roda"
                                                value="{{ $jaminan->roda }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="merk">Merk Kendaraan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Merk Kendaraan"aria-label="merk" name="merk"
                                                value="{{ $jaminan->merk }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tahun">Tahun Kendaraan</label>
                                            <input type="number" class="form-control"
                                                placeholder="Tahun Kendaraan"aria-label="tahun" name="tahun"
                                                value="{{ $jaminan->tahun }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="warna">Warna Kendaraan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Warna Kendaraan"aria-label="warna" name="warna"
                                                value="{{ $jaminan->warna }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_polisi">Nomor Polisi</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nomor Polisi Kendaraan"aria-label="nomor_polisi"
                                                name="nomor_polisi" value="{{ $jaminan->nomor_polisi }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_rangka">Nomor Rangka</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nomor Polisi Kendaraan"aria-label="nomor_rangka"
                                                name="nomor_rangka" value="{{ $jaminan->nomor_rangka }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_mesin">Nomor Mesin</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nomor Mesin Dari Kendaraan"aria-label="nomor_mesin"
                                                name="nomor_mesin" value="{{ $jaminan->nomor_mesin }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_bpkb">Nomor BPKB</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nomor BPKB Kendaraan"aria-label="nomor_bpkb"
                                                name="nomor_bpkb" value="{{ $jaminan->nomor_bpkb }}" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
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
