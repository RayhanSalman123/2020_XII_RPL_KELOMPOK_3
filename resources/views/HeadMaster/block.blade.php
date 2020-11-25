@extends('layouts.head_master.master')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Alasan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" role="form">
                @csrf
                <div class="card-body">
                   <div class="form-group">
                   
                  </div>
                  <div class="form-group">
                    <textarea cols="120" rows="20"></textarea>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button method="POST" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

  @endsection