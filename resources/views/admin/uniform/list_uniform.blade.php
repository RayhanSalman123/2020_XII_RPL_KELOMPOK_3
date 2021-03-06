@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_uniform/add_uniform" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>SERAGAM</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($uniform as $count => $uniform)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$uniform->urm_name}}</td>
                <td>
                    <form action="/admin/list_uniform/{{$uniform->urm_id}}/delete" method="post">
                    <a href="{{URL::to('/admin/list_uniform/edit_uniform')}}/{{$uniform->urm_id}}/edit" value="EDIT" class="btn btn-outline-info">Edit</a>
                    <button type="submit" name="submit" class="btn btn-outline-danger">Del</button>
                        {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>    
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection