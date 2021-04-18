@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header">
    Tambah
    <strong>Jadwal</strong>
  </div>
  <div class="card-body card-block">
    <form action="{{URL::to('/admin/list_schedule_uniform')}}" method="POST" class="form-horizontal">
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
          <label for="seragam" class=" form-control-label">Seragam</label>
        </div>
        <div class="col col-sm-6">
          <select name="uniform" class="form-control @error('uniform') is-invalid @enderror" required>
            <option value="">--PILIH--</option>
             @foreach($uniform as $uniform)
             <option value="{{ $uniform->urm_id }}">{{ $uniform->urm_name }}</option>
             @endforeach
          </select>
          @error('uniform')
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
          <input type="text" name="unf_week" placeholder="Masukkan Minggu Ke" class="form-control @error('unf_week') is-invalid @enderror" value="{{old('unf_week')}}" required>
          @error('unf_week')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror       
       </div>
       </div>

     <button type="submit" class="btn btn-primary btn-sm">Submit</button>
     <a href="/admin/list_schedule_uniform" class="btn btn-danger btn-sm">Cancel</a>
   </form>
 </div>
 <div class="card-footer">
 </div>
</div>
@endsection