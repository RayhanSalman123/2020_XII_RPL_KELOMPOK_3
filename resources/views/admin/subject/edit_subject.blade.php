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