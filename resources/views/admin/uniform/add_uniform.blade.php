@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header">
    Tambah
    <strong>Jadwal</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{URL::to('/admin/list_uniform')}}" method="POST" class="form-horizontal">
      @csrf
      <div class="row form-group">
        <div class="col col-sm-5">
          <label for="urm_name" class=" form-control-label">Nama Seragam</label>
        </div>
        <div class="col col-sm-6">
          <input type="text" name="urm_name" placeholder="Masukkan Nama Seragam" class="form-control @error('urm_name') is-invalid @enderror" value="{{old('urm_name')}}" required>
          @error('urm_name')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror       
       </div>
       </div>
       
     <button type="submit" class="btn btn-primary btn-sm">Submit</button>
     <a href="/admin/list_uniform" class="btn btn-danger btn-sm">Cancel</a>
   </form>
 </div>
 <div class="card-footer">
 </div>
</div>
@endsection