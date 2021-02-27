@extends('layouts.admin.master')

@section('content')
  <div class="card">
      <div class="card-header">
          Tambah
        <strong>Mata Pelajaran</strong>
      </div>
      <div class="card-body card-block">
        <form action="" method="POST" class="form-horizontal">
          @csrf

        <div class="row form-group">
            <div class="col col-sm-5">
              <label for="curriculum_name" class=" form-control-label">Mata Pelajaran</label>
            </div>
            <div class="col col-sm-6">
              <select name="subject_id" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value="">--PILIH--</option>
                  @foreach($subject as $data)
                  <option value="{{$data->subject_id}}">{{$data->name_subject}} - {{$data->curriculum_name}}</option>
                  @endforeach
              </select>
                 @error('curriculum')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                @enderror
            </div>
        </div>


        <div class="row form-group">
            <div class="col col-sm-5">
              <label for="curriculum_name" class=" form-control-label">Nama Guru</label>
            </div>
            <div class="col col-sm-6">
              <select name="teacher_id" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value="">--PILIH--</option>
                  @foreach($teacher as $data)
                  <option value="{{$data->teacher_id}}">{{$data->usr_name}}</option>
                  @endforeach
              </select>
                 @error('curriculum')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        <a href="/admin/list_subject_admin" class="btn btn-danger btn-sm">Cancel</a>
      </form>
    </div>
  <div class="card-footer">
  </div>
</div>
@endsection
