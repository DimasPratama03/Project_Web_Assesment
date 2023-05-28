@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6">
            <a href="{{ route('datakepribadian.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
        </div>
        <hr>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Jenis Kepribadian</h5>
                    <form action="{{ route('datakepribadian.update', $jenisKepribadian->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="personality">Personality</label>
                            <input type="text" id="personality" name="personality" class="form-control" value="{{ $jenisKepribadian->personality }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $jenisKepribadian->deskripsi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('datakepribadian') }}" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
