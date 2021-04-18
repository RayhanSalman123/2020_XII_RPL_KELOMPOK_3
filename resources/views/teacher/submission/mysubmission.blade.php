<!-- @extends('layouts.teacher.master')

@section('content')
    <div class="col-md-12">
         <div>
            <a href="/teacher/mysubmission/form-submission" class="btn btn-outline-success">Tambah</a>
        </div>
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>MATA PELAJARAN</th>
                        <th>HARI</th>
                        <th>JAM</th>
                         <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($submissions as $count => $submis)
                    <tr>
                        <td>{{$count+1}}</td>
                        <td>{{$submis->name_subject}}</td>
                        <td>{{$submis->day}}</td>
                        <td>{{$submis->time}}</td>
                        <td>
                             <form action="/teacher/mysubmission/{{$submis->submission_id}}/delete" method="post">
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
@endsection -->