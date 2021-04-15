@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header">
    Edit
    <strong>Jadwal</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{URL::to('/admin/list_uniform/update/'.$uniform->unf_id)}}" method="POST" class="form-horizontal">
      @csrf

      <div class="row form-group">
        <div class="col col-sm-5">
          <label for="hari" class=" form-control-label">Hari</label>
        </div>
        <div class="col col-sm-6">
          <select name="day_id" class="form-control @error('day') is-invalid @enderror" required>
            <option value="">--PILIH--</option>
            @foreach($day as $data)
              <option value="{{ $data->day_id }}">{{$data->day_name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-sm-5">
          <label for="unf_name_uniform" class=" form-control-label">Nama Seragam</label>
        </div>
        <div class="col col-sm-6">
          <input type="text" name="unf_name_uniform" placeholder="Masukkan Nama Seragam" class="form-control @error('unf_name_uniform') is-invalid @enderror" value="{{ $uniform->unf_name_uniform }}" required>
          @error('unf_name_uniform')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror       
       </div>
       </div>

      <div class="row form-group">
        <div class="col col-sm-5">
          <label for="unf_week" class=" form-control-label">Minggu Ke</label>
        </div>
        <div class="col col-sm-6">
          <input type="text" name="unf_week" placeholder="Masukkan Minggu Ke" class="form-control @error('unf_week') is-invalid @enderror" value="{{ $uniform->unf_week }}" required>
          @error('unf_week')
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