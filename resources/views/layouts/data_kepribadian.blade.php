@extends('layouts.master')

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datakepribadian.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Personality</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenisKepribadian as $data)
                <tr>
                    <td>{{ $data->personality }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>
                        <a href="{{ route('datakepribadian.show', $data->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('datakepribadian.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('datakepribadian.destroy', $data->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
