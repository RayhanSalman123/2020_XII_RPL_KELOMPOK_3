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
              <label for="kelas" class=" form-control-label">Kelas</label>
            </div>
            <div class="col col-sm-6">
              <select name="class" class="form-control @error('class') is-invalid @enderror" required>
                  <option value="">--PILIH--</option>
                <option value="3">X</option>
                <option value="4">XI</option>
                <option value="5">XII</option>
              </select>
              @error('class')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror       
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-sm-5">
              <label for="jurusan" class=" form-control-label">Jurusan</label>
            </div>
            <div class="col col-sm-6">
              <select name="major_name" class="form-control @error('majors') is-invalid @enderror" required>
                <option value="">--PILIH--</option>
                @foreach($majors as $majors)
                <option value="{{$majors->major_id}}">{{$majors->major_name}}</option>
                @endforeach
              </select>
              @error('major')
              <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
             </span>
             @enderror
           </div>
          </div>

        <div class="row form-group">
            <div class="col col-sm-5">
              <label for="tahun ajaran" class=" form-control-label">Tahun Ajaran</label>
            </div>
            <div class="col col-sm-6">
              <select name="school_year_name" class="form-control @error('school_year_name') is-invalid @enderror" required>
                  <option value="">--PILIH--</option>
                  @foreach($school_year as $school_year)
                  <option value="{{$school_year->school_year_id}}">{{$school_year->school_year_name}}</option>
                  @endforeach
              </select>
                 @error('school_year')
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