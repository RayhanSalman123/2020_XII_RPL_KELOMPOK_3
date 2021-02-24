@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        
        <strong>TAMBAH Tingkatan</strong>


    </div>
    <div class="card-body card-block">
        <form action="{{URL::to('/admin/list_grade/add_grade')}}" method="POST" class="form-horizontal">
            @csrf


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="tingkatan" class=" form-control-label">Tingkatan</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="grade_name" placeholder="Masukkan Kelas" class="form-control @error('grade_name') is-invalid @enderror" value="{{old('grade_name')}}" required>
                    @error('grade_name')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror       
               </div>
           </div>


           <button type="submit" class="btn btn-primary btn-sm">Submit
           </button>
           <a href="/admin/list_grade" class="btn btn-danger btn-sm">Cancel</a>
       </form>
   </div>
   <div class="card-footer">
   </div>
</div>
@endsection