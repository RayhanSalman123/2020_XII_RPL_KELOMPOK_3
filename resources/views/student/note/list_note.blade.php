@extends('layouts.student.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/student/list_note/add_note" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>MATA PELAJARAN</th>
                <th>TANGGAL</th>
                <th>CATATAN</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($note as $count => $note)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$note->name_subject}}</td>
                <td>{{$note->nt_date}}</td>
                <td>{{$note->nt_name}}</td>
                <td>
                    <form action="/student/list_note/{{$note->nt_id}}/delete" method="post">
                    <a href="{{URL::to('/student/edit_note')}}/{{$note->nt_id}}/edit" value="EDIT" class="btn btn-outline-info">Edit</a>
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