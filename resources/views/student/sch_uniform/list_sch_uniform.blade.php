@extends('layouts.student.master')

@section('content')
<div class="col-md-12">
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>SERAGAM</th>
                <th>MINGGU KE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sch_uniform as $count => $sch_uniform)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$sch_uniform->day_name}}</td>
                <td>{{$sch_uniform->urm_name}}</td>
                <td>{{$sch_uniform->unf_week}}</td>
            </tr>
            @endforeach
        </tbody>    
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection