@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_schedule_uniform/add_schedule_uniform" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>SERAGAM</th>
                <th>MINGGU KE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedule_uniform as $count => $schedule_uniform)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$schedule_uniform->day_name}}</td>
                <td>{{$schedule_uniform->urm_name}}</td>
                <td>{{$schedule_uniform->unf_week}}</td>
                <td>
                    <form action="/admin/list_schedule_uniform/{{$schedule_uniform->unf_id}}/delete" method="post">
                    <a href="{{URL::to('/admin/list_schedule_uniform/edit_schedule_uniform')}}/{{$schedule_uniform->unf_id}}/edit" value="EDIT" class="btn btn-outline-info">Edit</a>
                    <button type="submit" name="submit" class="btn btn-outline-danger">Del</button>
                        {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>
            @endforeach
        </tbody>    
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection