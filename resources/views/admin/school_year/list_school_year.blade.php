@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_school_year/add_school_year" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>TAHUN AJARAN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($school_year as $count => $school_year)
            <tr>
                <td>{{$count+1}}</td>
                <td>{{$school_year->school_year_name}}</td>
                <td>
                    <form action="/admin/list_school_year/{{$school_year->school_year_id}}/delete" method="post">
                        <button type="submit" name="submit" class="btn btn-outline-danger">DELETE</button>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection