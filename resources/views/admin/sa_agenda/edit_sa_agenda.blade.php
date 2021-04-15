@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        Edit
        <strong>Agenda</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="form-horizontal">
            @csrf

            <div class="row form-group">
      <div class="col col-sm-5">
        <label for="tanggal kegiatan" class=" form-control-label">Tanggal Kegiatan</label>
      </div>
      <div class="col col-sm-6">
          <input type="date"  name="sa_date" class="form-control" data-provide="datepicker" @error('sa_date') is-invalid @enderror" value="{{ $sa_agenda->sa_date }}" required>
          @error('sa_date')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror 
      </div>
      </div>

      <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="description" class=" form-control-label">Deskripsi</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="sa_description" placeholder="Masukkan Deskripsi" class="form-control @error('sa_description') is-invalid @enderror" value="{{ $sa_agenda->sa_description }}" required>
                    @error('sa_description')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror       
                </div>
        </div>

        <div class="row form-group">
        <div class="col col-sm-5">
          <label for="tempat" class=" form-control-label">Tempat</label>
        </div>
        <div class="col col-sm-6">
          <input type="text" name="sa_place" placeholder="Masukkan Nama Tempat" class="form-control @error('sa_place') is-invalid @enderror" value="{{ $sa_agenda->sa_place}}" required>
          @error('sa_place')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror       
       </div>
       </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a href="/admin/list_sa_agenda" class="btn btn-dark btn-sm">Cancel</a>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection