@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>TINGKATAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grade as $count => $grade)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$grade->grade_name}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection