@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_teacher/add_teacher" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" style="width: 100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>NAMA GURU</th>
                <th>MATA PELAJARAN</th>
                <th>JENIS KELAMIN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $nomor => $teacher)
            <tr>
                <td>{{ $nomor+1 }}</td>
                <td>{{ $teacher->nip }}</td>
                <td>{{ $teacher->usr_name }}</td>
                <td>{{ $teacher->name_subject }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>
                   <form action="/admin/list_teacher/{{$teacher->teacher_id}}/delete" method="post">
                    <a href="{{URL::to('/admin/edit_teacher')}}/{{$teacher->teacher_id}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a>
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