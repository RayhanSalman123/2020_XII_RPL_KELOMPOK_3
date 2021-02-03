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
                        <th>NO</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($class as $count => $classes)
                    <tr>
                        <td>{{$count+1}}</td>
                        <td>{{$classes->class}}</td>
                        <td>{{$classes->major_name}}</td>
                        <td>
                          <form action="/admin/list_class/{{$classes->class_id}}/delete" method="post">
                        <a href="{{URL::to('/admin/edit_class')}}/{{$classes->class_id}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a>
                        <button type="submit" name="submit" class="btn btn-outline-danger">DELETE</button>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                          </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection