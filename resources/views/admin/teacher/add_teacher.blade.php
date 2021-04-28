@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah
        <strong>Guru</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="form-horizontal"> 
            @csrf
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="nip" class=" form-control-label">NIP</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" value="{{ old('nip') }}" required>
                    @error('nip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                       
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="nama guru" class=" form-control-label">Nama Guru</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="usr_name" placeholder="Masukkan Nama Guru" class="form-control @error('usr_name') is-invalid @enderror" value="{{ old('usr_name') }}" required>
                    @error('usr_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

              <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Email</label>
                </div>
                <div class="col col-sm-6">
                    <input type="email" id="input-normal" name="usr_email" placeholder="Masukkan Email" class="form-control @error('usr_email') is-invalid @enderror" value="{{ old('usr_email') }}" required>
                     @error('usr_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Jenis Kelamin</label>
                </div>
                <div class="col col-sm-6">
                    <select name="gender" id="select" class="form-control @error('gender') is-invalid @enderror" required>
                        <option value="" selected="" disabled="" class="form-control">--- Pilih ---</option>
                        <option value="Laki Laki" class="form-control">Laki Laki</option>
                        <option value="Perempuan" class="form-control">Perempuan</option>
                    </select>
                      @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

           
             
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm"> Submit
        </button>
        <a href="/admin/list_teacher" class="btn btn-danger btn-sm">
            Cancel
        </a>
    </div>
    </form>
</div>
@push('js')

@endpush
@endsection