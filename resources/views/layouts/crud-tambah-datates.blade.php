@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Tes</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('datates.simpan') }}" method="POST">
                        @csrf
                  <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                      <label for="inputEmail4">ID Tes</label>
                      <input type="text" class="form-control" id="inlineFormInputName2" placeholder="TS001">
                    </div> --}}
                    <div class="form-group col-md-6">
                      <label for="inlineFormInputName2">Judul</label>
                      <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
                            
                                <!-- error message untuk title -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inlineFormInputName2">Deskripsi</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">
                            
                                <!-- error message untuk title -->
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inlineFormInputName2">Jumlah Tes</label>
                        <input type="number" class="form-control @error('Jumlah_Tes') is-invalid @enderror" name="Jumlah_Tes">
                            
                                <!-- error message untuk title -->
                                @error('Jumlah_Tes')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary">Submit</button>
                </div>
            </form>
              </div>
        </div>
    </div>
</div>
    
@endsection

@push('page-scripts')
    
@endpush