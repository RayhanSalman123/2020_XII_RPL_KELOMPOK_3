 @extends('layouts.teacher.master')

@section('content1')

 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>TABLE ANNOUNCEMENT</b></h3>

                <div class="card-tools">
                <a href="/admin/announcement/create" align="right" class="btn btn-success btn-sm">ADD ANNOUNCEMENT</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>no</th>
                      <th>Date</th>
                      <th>Title Announcement</th>
                      <th>Class</th>
                      <th>Subject</th>
                      <th>Teacher</th>
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($data as $no=>$a)
                    
                    <tr>
                      <td>{{++$no}}</td>
                      <td>{{$a->created_at}}</td>
                      <td>{{$a->title}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->name}}</td>
                      <td>{{$a->teacher_name}}</td>
                      <td>
                           <a href="{{URL::to('admin/announcement/')}}/{{$a->id}}/detail" class="btn btn-primary btn-sm" type="Button">DETAIL</a> 
                           <a class="btn btn-success btn-sm" type="Button" href="{{URL::to('admin/announcement/')}}/{{$a->id}}/edit">EDIT</a>
                           <a class="btn btn-danger btn-sm" type="Button" href="{{URL::to('admin/announcement/')}}/{{$a->id}}/delete">DELETE</a>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>


            
      </div><!-- /.container-fluid -->
    </section>
@endsection
