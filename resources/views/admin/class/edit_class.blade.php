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
                    <select name="class" class="form-control @error('class') is-invalid @enderror" required>
                                 <option>{{$class -> class}}</option>
                                 <option value="3">X</option>
                                 <option value="4">XI</option>
                                 <option value="5">XII</option>
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
                <select name="major_name" class="form-control @error('major') is-invalid @enderror" required>
                 <option value="{{ $class->major_id }}" selected="" class="form-control">{{ $class->major_name }}</option>
               @foreach($major as $major)
               <option>{{$major->major_name}}</option>

               @endforeach
              
           
               
                </select>
                @error('major')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

         <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="group" class=" form-control-label">Group</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="group" placeholder="Masukkan Group" class="form-control @error('group') is-invalid @enderror" value="{{ $class->group }}" required>
                    @error('group')
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