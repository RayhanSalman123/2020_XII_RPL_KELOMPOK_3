@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_schedule_admin/add_schedule" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" style="width: 100%;">
        <thead>
            <tr>
                <th>NO</th>
                <th>HARI</th>
                <th>JAM</th>
                <th>KELAS</th>
                <th>MATA PELAJARAN</th>
                <th>TAHUN AJARAN</th>
                <th>NAMA TEACHER</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $key => $schedule)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $schedule->day }}</td>
                <td>{{ $schedule->hour }}</td>
                <td>{{ $schedule->grade_name }} {{ $schedule->major_name }} {{ $schedule->group }}</td>
                <td>{{ $schedule->name_subject }}</td>
                <td>{{ $schedule->school_year_name }}</td>
                <td>{{ $schedule->usr_name }}</td>
                  <td>
                        <form action="/admin/list_schedule/{{$schedule->schedule_id}}/delete" method="post">
                        <a href="{{URL::to('/admin/edit_schedule')}}/{{$schedule->schedule_id}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a>
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
<!-- END DATA TABLE-->
</div>
@endsection