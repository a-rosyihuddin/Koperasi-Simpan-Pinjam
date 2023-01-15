@extends('layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Data Pegawai</h6>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="{{ Route('pegawai.create') }}"><i
                                        class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-xxs font-weight-bolder" style="width: 5px">
                                            No
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder">
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder col-3"
                                            colspan="2">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $pg)
                                        <tr>
                                            <td>
                                                <p class="font-weight-bold mb-0 text-sm text-center">{{ $loop->iteration }}
                                                </p>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center"
                                                        style="padding-left: 0.2cm">
                                                        <h6 class="mb-0 text-sm">{{ $pg->nama_pegawai }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                        class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ Route('pegawai.destroy', $pg->id) }}" method="POST">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
