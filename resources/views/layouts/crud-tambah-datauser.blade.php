@extends('layouts.master')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Akun</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('datauser.simpan') }}" method="POST">
                        @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control @error('image') is-invalid @enderror" name="email">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            
                                <!-- error message untuk title -->
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            
                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Role</label>
                        <select id="inputState" class="form-control" @error('role') is-invalid @enderror" name="role">
                          <option selected>admin</option>
                          <option>user</option>
                        </select>

                      <!-- error message untuk title -->
                      @error('role')
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