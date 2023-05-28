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
                <th scope="col">google_id</th>
                <th scope="col">value_introvert</th>
                <th scope="col">value_extrovert</th>
                <th scope="col">personality</th>
                <th scope="col">date</th>
                <th scope="col">date_expired</th>
            </tr>
            </thead>
            @foreach ($result as $data)
            <tbody>
                <tr>
                    <td>{{ $data->google_id }}</td>
                    <td>{{ $data->value_introvert }}</td>
                    <td>{{ $data->value_extrovert }}</td>
                    <td>{{ $data->personality }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->date_expired }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $result->links() }}
    </div>
</div>
    
@endsection

@push('page-scripts')
    
@endpush