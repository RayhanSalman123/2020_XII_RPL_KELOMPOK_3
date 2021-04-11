@extends('layouts.teacher.master')

@section('content')
<div class="card">
    <div class="card-header">
        Form
        <strong>Pengajuan</strong>
    </div>

    <div class="card-body card-block">
        <form action="{{URL::to('teacher/mysubmission/form-submission')}}" method="POST" class="form-horizontal">
            @csrf

          <div class="row form-group">
            <div class="col col-sm-5">
              
            </div>
            <div class="col col-sm-6">
              <input name="teacher_id" type="hidden" class="form-control @error('curriculum') is-invalid @enderror" value="{{ Auth()->user()->usr_id }}" readonly required>

            </div>
        </div>


        <div class="row form-group">
            <div class="col col-sm-5">
              <label for="curriculum_name" class=" form-control-label">Mata Pelajaran</label>
            </div>
            <div class="col col-sm-6">
              <select name="subject_id" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value=""disabled selected>--PILIH--</option>
                  @foreach($subject as $data)
                  <option value="{{$data->subject_id}}">{{$data->name_subject}}</option>
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
              <label for="curriculum_name" class=" form-control-label">Hari</label>
            </div>
            <div class="col col-sm-6">
              <select name="day_id" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value=""disabled selected>--PILIH--</option>
                  @foreach($day as $data)
                  <option value="{{$data->day_name}}">{{$data->day_name}}</option>
                  @endforeach
              </select>
                 @error('day')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                @enderror
            </div>
        </div>




<div class="row form-group">
            <div class="col col-sm-5">
              <label for="curriculum_name" class=" form-control-label">Jam</label>
            </div>
            <div class="col col-sm-6">
              <select name="hour_id" class="form-control @error('curriculum') is-invalid @enderror" required>
                  <option value=""disabled selected>--PILIH--</option>
                  @foreach($hour as $data)
                  <option value="{{$data->start_time}} - {{$data->end_time}}">{{$data->start_time}} - {{$data->end_time}}</option>
                  @endforeach
              </select>
                 @error('hour')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                @enderror
            </div>
        </div>


    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <!-- <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button> -->
    </div>
     </form>
@endsection