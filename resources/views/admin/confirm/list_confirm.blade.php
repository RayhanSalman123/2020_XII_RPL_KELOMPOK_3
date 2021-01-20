@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>KELAS</th>
                    <th>JURUSAN</th>
                    <th>KONFIRMASI</th>
                    <th>ALASAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>X</td>
                    <td>RPL</td>
                    <td>TERIMA</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>XI</td>
                    <td>MULTIMEDIA</td>
                    <td>TOLAK</td>
                    <td>Terdapat Jadwal Yang bentrok</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection