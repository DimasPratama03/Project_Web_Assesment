@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        {{-- <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datauser.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div> --}}
        <div class="float-right">
            <form method="GET">
              <div class="input-group">
                {{-- <label for="" class="form-control">Search</label> --}}
                <div class="input-group-append">
                  <input type="text" class="form-control" value="" placeholder="Search" name="search" autofocus value="{{ $search }}">
                </div>
              </div>
            </form>
          </div>
        <hr>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
            </tr>
            </thead>
            @foreach ($users as $data)
            <tbody>
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->role }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
</div>
    
@endsection

@push('page-scripts')
    
@endpush