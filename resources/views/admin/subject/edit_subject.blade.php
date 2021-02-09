@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah
        <strong>Mata Pelajaran</strong>
    </div>
    <div class="card-body card-block">
       <form action="{{URL::to('/admin/list_subject/update/'.$subjects->subject_id)}}" method="POST" class="form-horizontal">
      @csrf

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="name_subject" placeholder="Masukkan Mata Pelajaran" class="form-control @error('name_subject') is-invalid @enderror" value="{{ $subjects->name_subject }}">
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
          <select name="class" class="form-control @error('class') is-invalid @enderror">
            <option>--PILIH--</option>
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
                <select name="sbj_major_id" id="select" class="form-control @error('sbj_major_id') is-invalid @enderror">
                    <option value="{{ $subjects->sbj_major_id }}" selected="" disabled="" class="form-control">--- PILIH ---</option>
                    @foreach ($Majors as $major)
                    <option value="{{$major->major_id}}" class="form-control">{{$major->major_name}}</option>
                    @endforeach
                </select>
                    @error('sbj_major_id')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror       
               </div>
           </div>


     <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="grup" class=" form-control-label">Grup</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="group" placeholder="Masukkan Grup" class="form-control @error('group') is-invalid @enderror" value="{{ $subjects->group }}">
                    @error('group')
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
                    <input type="text" name="curriculum" placeholder="Masukkan Kurikulum" class="form-control @error('curriculum') is-invalid @enderror" value="{{ $subjects->curriculum }}">
                    @error('curriculum')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror       
             </div>
         </div>

         <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
                <a href="/admin/list_subject_admin" " class="btn btn-danger btn-sm">
                 <i class="fa fa-ban"></i>Cancel</a>
        </form>
    </div>
        <div class="card-footer">
            
        </div>
</div>
@endsection