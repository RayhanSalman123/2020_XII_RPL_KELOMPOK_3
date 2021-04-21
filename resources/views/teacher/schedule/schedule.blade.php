@extends('layouts.teacher.master')
@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_schedule_admin/add_schedule" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" style="width: 100%;">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>JAM</th>
                <th>KELAS</th>
                <th>MATA PELAJARAN</th>
                <th>TAHUN AJARAN</th>
                <th>NAMA TEACHER</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
            </tr>
        </tbody>
</table>
</div>
<!-- END DATA TABLE-->
</div>
@endsection