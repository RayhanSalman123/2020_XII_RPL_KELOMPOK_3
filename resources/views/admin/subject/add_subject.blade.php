@extends('layouts.admin.master')

@section('content')
  <div class="card">
      <div class="card-header">
          Tambah
        <strong>Mata Pelajaran</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{URL::to('/admin/list_subject_admin/add_subject')}}" method="POST" class="form-horizontal">
          @csrf

          <div class="row form-group">
            <div class="col col-sm-5">
              <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
            </div>
            <div class="col col-sm-6">
              <input type="text" name="name_subject" placeholder="Masukkan Mata Pelajaran" class="form-control @error('name_subject') is-invalid @enderror" value="{{old('name_subject')}}" required>
              @error('name_subject')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror       
            </div>
          </div>

        <div class="row form-group">
            <div class="col col-sm-5">
              <label for="curriculum_name" class=" form-control-label">Kurikulum</label>
            </div>
            <div class="col col-sm-6">
              <select name="curriculum_name" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value="">--PILIH--</option>
                  @foreach($curriculum as $curriculum)
                  <option value="{{$curriculum->curriculum_id}}">{{$curriculum->curriculum_name}}</option>
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