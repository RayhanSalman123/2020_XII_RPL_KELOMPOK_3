@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Edit
        <strong>Kelas</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="kelas" class=" form-control-label">NIP</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP" value="{{ $teacher->nip }}" required>

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
                    <input type="text" id="input-normal" name="usr_name" placeholder="Masukkan Nama Guru" class="form-control @error('usr_name') is-invalid @enderror" value="{{ $teacher->usr_name }}" required>
                    @error('usr_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <select name="tcr_subject_id" id="select" class="form-control @error('tcr_subject_id') is-invalid @enderror" required>
                        
                        <option value="{{ $teacher->tcr_subject_id }}" selected="" class="form-control">{{ $teacher->name_subject }}</option>

                        @foreach($subjects as $subject)
                        <option value="{{ $subject->subject_id }}" class="form-control">{{ $subject->name_subject }}</option>
                        @endforeach
                    </select>
                    @error('tcr_subject_id')
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
                        <option value="{{ $teacher->gender }}" selected="" class="form-control">{{ $teacher->gender }}</option>
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
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a href="/admin/list_teacher" class="btn btn-dark btn-sm">Cancel</a>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection