@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
        <a href="/admin/list_subject_admin/add_subject" class="btn btn-outline-success">Tambah</a>
    </div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>MATA PELAJARAN</th> 
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>KURIKULUM</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subject as $count => $subjects)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$subjects->name_subject}}</td>
                <td>{{$subjects->class}}</td>
                <td>{{$subjects->major_name}}</td>
                <td>{{$subjects->curriculum}}</td>
                <td>
                   <form action="/admin/list_subject_admin/{{$subjects->subject_id}}/delete" method="post">
                    <a href="{{URL::to('/admin/list_subject/edit_subject')}}/{{$subjects->subject_id}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a>
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