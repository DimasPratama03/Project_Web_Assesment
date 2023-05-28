@extends('layouts.master')

@section('content')
<div class="section-body">
    @include('layouts.flash-message')
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datauser.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div>
        <hr>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Jenis Kepribadian</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Personality</th>
                                    <th scope="col">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $jenisKepribadian->personality }}</td>
                                    <td>{{ $jenisKepribadian->deskripsi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('datakepribadian') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
