@extends('layouts.admin.master')

@section('content')
	<div class="col-md-12">
         <<div>
            <a href="/list_submission/add_submission" class="btn btn-outline-success">Tambah</a>
        </div>
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>MATA PELAJARAN</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>KURIKULUM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Komputer Jaringan</td>
                        <td>XII</td>
                        <td>RPL</td>
                        <td>KTSP</td>
                    </tr>
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection