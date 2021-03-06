@extends('layouts.head_master.master')

@section('content')
    <div class="col-md-12">
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIP</th>
                        <th>NAMA GURU</th>
                        <th>MATA PELAJARAN</th>
                        <th>JENIS KELAMIN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123456789</td>
                        <td>Denis, S.Pd</td>
                        <td>Komputer Jaringan</td>
                        <td>Pria</td>
                        <td>
                            <a href="/approve" class="btn btn-primary">Terima</a>
                            <a href="/block" class="btn btn-danger">Tolak</a>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection