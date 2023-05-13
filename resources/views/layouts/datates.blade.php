@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datates.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div>
        <hr>
        <table class="table table-striped table-bordered table-sm">
            <tr>
                <th>ID Tes</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Jumlah Tes</th>
                <th>Action</th>
            </tr>
            @foreach ($data_tes as $data)
                <tr>
                    <td>{{ $data->ID_Tes }}</td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->Jumlah_Tes }}</td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
    
@endsection

@push('page-scripts')
    
@endpush