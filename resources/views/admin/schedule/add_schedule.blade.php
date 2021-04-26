@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah
        <strong>Jadwal</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="form-horizontal">
            @csrf
            
             <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class=" form-control-label">Kelas</label>
                </div>
                <div class="col col-sm-6">
                    <select name="class_id" class="form-control" required>
                        <option disabled selected value="">-- Pilih --</option>
                        @foreach($class as $data)
                        <option value="{{ $data->class_id }}">{{$data->grade_name}} &nbsp; {{ $data->major_name.' '.''.' '.$data->group}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class=" form-control-label">Mapel</label>
                </div>
                <div class="col col-sm-6">
                    <select name="subject_id" class="form-control" required>
                        <option disabled selected value="">-- Pilih --</option>
                        @foreach($teacher as $data)
                        <option value="{{ $data->ts_id }}">{{$data->name_subject.' '.' - '.' '. $data->usr_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

           <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class=" form-control-label">Hari</label>
                </div>
                <div class="col col-sm-6">
                    <select name="day_id" class="form-control" required>
                        <option disabled selected value="">-- Pilih --</option>
                        @foreach($day as $data)
                        <option value="{{ $data->day_id }}">{{$data->day_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                <label for="nama guru" class=" form-control-label">Jam ke</label>
                </div>
                <div class="col col-sm-6">
                    <select name="hour_id" class="form-control" required>
                        <option disabled selected value="">-- Pilih --</option>
                        @foreach($hour as $data)
                        <option value="{{ $data->hour_id }}">Jam {{$data->hour_notes}} &nbsp; {{ $data->start_time.' '.'-'.' '.$data->end_time}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="container" style="float: right">
                <input type="submit" class="btn btn-primary" value="simpan">
                <input type="reset" class="btn btn-warning" value="Reset">

                </div>
            </div>













        </form>
    </div>

</div>




@endsection
