@extends('layouts.admin.master')

@section('content')
	<div class="col-md-12">
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>GURU</th>
                        <th>MATA PELAJARAN</th>
                        <th>HARI</th>
                        <th>JAM</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($submissions as $count => $submis)
                    <tr>
                        <td>{{$count+1}}</td>
                        <td>{{$submis->usr_name}}</td>
                        <td>{{$submis->name_subject}}</td>
                        <td>{{$submis->day}}</td>
                        <td>{{$submis->time}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection