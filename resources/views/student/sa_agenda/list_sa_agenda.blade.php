@extends('layouts.student.master')

@section('content')
<div class="col-md-12">
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL KEGIATAN</th>
                <th>DESKRIPSI</th>
                <th>TEMPAT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sa_agenda as $count => $sa_agenda)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$sa_agenda->sa_date}}</td>
                <td>{{$sa_agenda->sa_description}}</td>
                <td>{{$sa_agenda->sa_place}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection