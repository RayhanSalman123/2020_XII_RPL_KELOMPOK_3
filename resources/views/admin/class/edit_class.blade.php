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
                    <select name="class" class="form-control @error('class') is-invalid @enderror" >
                                 <option>{{$class -> class}}</option>
                                 <option>X</option>
                                 <option>XI</option>
                                 <option>XII</option>
                                 </select>
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

                 <option value="{{ $class->major->_major_id }}" selected="" class="form-control">{{ $class->majors->major_name }}</option>

                @foreach($class as $major)
                @if($class->majors->major_id != $major_major_id)
                <option value="{{$major->_major_id}}">{{$major->major_name}}</option>
                @endif
                @endforeach
                </select>

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