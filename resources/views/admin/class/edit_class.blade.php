@extends('layouts.admin.master')

@section('content')
<div class="card">
                                    <div class="card-header">
                                        Edit
                                        <strong>Kelas</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{URL::to('/admin/update/'.$class->class_id)}}" method="POST" class="form-horizontal">
                                        @csrf
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="kelas" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" name="class" placeholder="Masukkan Kelas" class="form-control  @error('class') is-invalid @enderror" value="{{$class -> class}}">
                                                     @error('class')
                                                        <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                        </span>
                                                     @enderror
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="jurusan" class=" form-control-label">Jurusan</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" name="major" placeholder="Masukkan Jurusan" class="form-control  @error('major') is-invalid @enderror" value="{{$class -> major}}">
                                                     @error('major')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                      @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                             <a href="/admin/list_class" class="btn btn-dark btn-sm">Cancel</a>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                                @endsection