@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Edit
        <strong>Mata Pelajaran</strong>
    </div>
    <div class="card-body card-block">
       <form action="{{URL::to('/admin/list_subject/update/'.$subject->subject_id)}}" method="POST" class="form-horizontal">
      @csrf

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="name_subject" placeholder="Masukkan Mata Pelajaran" class="form-control @error('name_subject') is-invalid @enderror" value="{{ $subject->name_subject }}" required>
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
                      <option value="{{$subject->sbj_class_id}}">{{$subject->class}}</option>
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
                  <select name="major_name" class="form-control" required>
                     <option value="{{ $subject->major_id }}" selected="" class="form-control">{{ $subject->major_name }}</option>
                      @foreach($majors as $major)
                      <option value="{{ $major->major_id}}">{{$major->major_name}}</option>
                      @endforeach
                      @error('sbj_major_id')
                      <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </select>       
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-sm-5">
                    <label for="tahun ajaran" class=" form-control-label">Tahun Ajaran</label>
            </div>
            <div class="col col-sm-6">
                  <select name="school_year_name" class="form-control" required>
                     <option value="{{$subject->school_year_id}}" selected="" class="form-control">{{ $subject->school_year_name }}</option>
                      @foreach($school_year as $school_year)
                      <option value="{{$school_year->school_year_id }}">{{$school_year->school_year_name}}</option>
                      @endforeach
                      @error('sbj_school_year_id')
                      <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </select>       
            </div>
          </div>

          <div class="row form-group">
            <div class="col col-sm-5">
                    <label for="kurikulum" class=" form-control-label">Kurikulum</label>
            </div>
            <div class="col col-sm-6">
                  <select name="curriculum_name" class="form-control" required>
                     <option value="{{$subject->curriculum_id}}" selected="" class="form-control">{{ $subject->curriculum_name }}</option>
                      @foreach($curriculum as $curriculum)
                      <option value="{{$curriculum->curriculum_id}}">{{$curriculum->curriculum_name}}</option>
                      @endforeach
                      @error('sbj_curriculum_id')
                      <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </select>       
            </div>
          </div>

         <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
                <a href="/admin/list_subject_admin" " class="btn btn-danger btn-sm">
                 <i class="fa fa-ban"></i>Cancel</a>
        </form>
    </div>
        <div class="card-footer">
            
        </div>
</div>
@endsection