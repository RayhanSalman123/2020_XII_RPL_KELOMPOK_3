@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah
        <strong>Mata Pelajaran</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{URL::to('/admin/list_subject_admin/add_subject')}}" method="POST" class="form-horizontal">
      @csrf

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="name_subject" placeholder="Masukkan Mata Pelajaran" class="form-control @error('name_subject') is-invalid @enderror" value="{{old('name_subject')}}">
                    @error('name_subject')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror       
             </div>
         </div>
         
         <div class="row form-group">
        <div class="col col-sm-5">
          <label for="kelas" class=" form-control-label">Kelas</label>
        </div>
        <div class="col col-sm-6">
          <select name="class" class="form-control @error('class') is-invalid @enderror" required>
            <option value="">--PILIH--</option>
            <option value="1">X</option>
            <option value="2">XI</option>
            <option value="3">XII</option>
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
        <select name="major_name" class="form-control @error('majors') is-invalid @enderror">
          <option>--PILIH--</option>
          @foreach($majors as $majors)
          <option value="{{$majors->major_id}}">{{$majors->major_name}}</option>
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
                    <label for="curriculum" class=" form-control-label">Kurikulum</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="curriculum" placeholder="Masukkan Kurikulum" class="form-control @error('curriculum') is-invalid @enderror" value="{{old('curriculum')}}">
                    @error('curriculum')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror       
             </div>
         </div>
         <button type="submit" class="btn btn-primary btn-sm">Submit</button>
           <a href="/admin/list_subject_admin" class="btn btn-danger btn-sm">Cancel</a>
        </form>
    </div>
        <div class="card-footer"> 
        </div>
</div>
@endsection