@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_curriculum/add_curriculum" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>KURIKULUM</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($curriculum as $count => $curriculum)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$curriculum->curriculum_name}}</td>
                <td>
                    <form action="/admin/list_curriculum/{{$curriculum->curriculum_id}}/delete" method="post">
                        <button type="submit" name="submit" class="btn btn-outline-danger">DELETE</button>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>

            </tbody>
            @endforeach
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection