@extends('layouts.admin.master')

@section('content')
	<div class="col-md-12">
         <div>
            <a href="/admin/manage_major/add_major" class="btn btn-outline-success">Tambah</a>
        </div>
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>JURUSAN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Majors as $count => $major)
                    <tr>
                        
                        <td>{{$count+1}}</td>
                        <td>{{$major->major_name}}</td>
                        <td>
                        <button type="submit" name="submit" class="btn btn-danger">DELETE</button>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        </td>
                        
                </tbody>
                @endforeach
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection