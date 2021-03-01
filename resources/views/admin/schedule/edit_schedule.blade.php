@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Edit
        <strong>Jadwal</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class=" form-control-label">Hari</label>
                </div>
                <div class="col col-sm-6">
                    <select name="day" class="form-control" required>
                        <option selected value="{{$schedules->day}}">{{$schedules->day}}</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jum'at">Jum'at</option>
                    </select>
                </div>
            </div>

             <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class="form-control-label">Pelajaran ke</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="lesson_to" value="{{$schedules->lesson_to}}" placeholder="Pelajaran Ke" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class=" form-control-label">Jam</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" value="{{$schedules->hour}}" name="hour" placeholder="Contoh 12:00:00" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class="form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <select name="subject" class="form-control">
                        <option selected value="{{$schedules->sch_subject_id}}">{{$schedules->name_subject}}</option>
                        @foreach($subjects as $subject)
                        <option value="{{ $subject->subject_id }}">{{ $subject->name_subject }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class=" form-control-label">Kelas</label>
                </div>
                <div class="col col-sm-6">
                    <select name="class" class="form-control">
                        <option selected value="{{ $schedules->sch_class_id }}">-- Pilih --</option>
                        @foreach($classes as $class)
                        <option value="{{ $class->class_id }}">{{ $class->grade_name }} {{ $class->major_name }} {{ $class->group }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class=" form-control-label">Tahun Ajaran</label>
                </div>
                <div class="col col-sm-6">
                    <select name="school_year" class="form-control">
                        <option selected value="{{ $schedules->school_year_id }}">-- Pilih --</option>
                        @foreach($school_years as $school_year)
                        <option value="{{ $school_year->school_year_id }}">{{ $school_year->school_year_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class=" form-control-label">Nama Guru</label>
                </div>
                <div class="col col-sm-6">
                    <select name="teacher" class="form-control">
                        <option selected value="{{$schedules->teacher_id}}">-- Pilih --</option>
                        @foreach($teachers as $teacher)
                        <option value="{{ $teacher->teacher_id }}">{{ $teacher->usr_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <a href="/admin/list_schedule_admin" " class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i>Cancel
                </a>
            </div>

        </form>
    </div>

</div>
@endsection