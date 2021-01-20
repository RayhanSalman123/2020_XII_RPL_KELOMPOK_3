
@extends('layouts.admin.master')

@section('content')
    <div class="col-md-12">
        <div>
            <a href="/admin/list_schedule_admin/add_schedule" class="btn btn-outline-success">Tambah</a>
        </div>
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>MATA PELAJARAN</th>
                        <th>HARI</th>
                        <th>TANGGAL</th>
                        <th>JAM</th>
                        <th>GURU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Komputer Jaringan</td>
                        <td>Senin</td>
                        <td>2020-08-14</td>
                        <td>12:00:00</td>
                        <td>Denis</td>
                    </tr>
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection