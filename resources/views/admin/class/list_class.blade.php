@extends('layouts.admin.master')

@section('content')
	<div class="col-md-12">
        <div>
            <a href="/admin/list_class/add_class" class="btn btn-outline-success">Tambah</a>
        </div>
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>XII</td>
                        <td>RPL</td>
                    </tr>
                    
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection