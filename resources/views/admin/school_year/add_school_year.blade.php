@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        
        <strong>TAMBAH TAHUN AJARAN</strong>


    </div>
    <div class="card-body card-block">
        <form action="{{URL::to('/admin/list_school_year/add_school_year')}}" method="POST" class="form-horizontal">
            @csrf


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="tahun ajaran" class=" form-control-label">Tahun Ajaran</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="school_year_name" placeholder="Masukkan Tahun Ajaran" class="form-control @error('school_year_name') is-invalid @enderror" value="{{old('school_year_name')}}" required>
                    @error('school_year_name')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror       
               </div>
           </div>


           <button type="submit" class="btn btn-primary btn-sm">Submit
           </button>
           <a href="/admin/list_school_year" class="btn btn-danger btn-sm">Cancel</a>
       </form>
   </div>
   <div class="card-footer">
   </div>
</div>
@endsection