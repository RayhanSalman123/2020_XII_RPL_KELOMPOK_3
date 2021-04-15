@extends('layouts.admin.master')

@section('content')
<div class="col-md-12">
   <div>
    <a href="/admin/list_sa_agenda/add_sa_agenda" class="btn btn-outline-success">Tambah</a>
</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL KEGIATAN</th>
                <th>DESKRIPSI</th>
                <th>TEMPAT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sa_agenda as $count => $sa_agenda)
            <tr>

                <td>{{$count+1}}</td>
                <td>{{$sa_agenda->sa_date}}</td>
                <td>{{$sa_agenda->sa_description}}</td>
                <td>{{$sa_agenda->sa_place}}</td>
                <td>
                    <form action="/admin/list_sa_agenda/{{$sa_agenda->sa_id}}/delete" method="post">
                    <a href="{{URL::to('/admin/edit_sa_agenda')}}/{{$sa_agenda->sa_id}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a>
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