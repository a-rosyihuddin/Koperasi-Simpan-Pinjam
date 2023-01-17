@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Tambah Peagawai</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-primary mb-0" href="{{ Route('pegawai.index') }}">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ Route('pegawai.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_pegawai">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama Pegawai"
                                            aria-label="Nama Pegawai" name="nama_pegawai" value="{{ old('nama_pegawai') }}"
                                            required autofocus>
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
