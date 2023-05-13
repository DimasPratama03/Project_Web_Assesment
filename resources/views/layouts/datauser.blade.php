@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datauser.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div>
        <hr>
        <table class="table table-striped table-bordered table-sm">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->role }}</td>
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