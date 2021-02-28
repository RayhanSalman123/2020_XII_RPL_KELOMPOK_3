@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_grade/add_grade" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>TINGKATAN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grade as $count => $grade)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$grade->grade_name}}</td>
                <td>
                    <form action="/admin/list_grade/{{$grade->grade_id}}/delete" method="post">
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