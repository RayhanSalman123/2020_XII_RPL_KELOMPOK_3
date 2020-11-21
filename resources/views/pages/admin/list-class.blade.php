@extends('layouts.admin.master')

@section('content1')

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>TABLE CLASSES</b></h3>

                <div class="card-tools">
                <a href="class/create" align="right" class="btn btn-success btn-sm">ADD CLASS</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                     
                      <th>No</th>
                      <th>Name Class</th>
                      <th>Majors</th>
                     
                      <th><center>ACTION</center></th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($data as $no=>$a)
                    
                    <tr>
                      <td>{{++$no}}</td>
                      <td>{{$a->class_name}}</td>
                      <td>{{$a->major}}</td>
                    <td>
                     <center><a class="btn btn-danger btn-sm" type="Button" href="class/{{$a->id}}/delete">DELETE</a></center>
                     </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>


         </div>
    </section>
@endsection