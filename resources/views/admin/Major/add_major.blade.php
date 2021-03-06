@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        
        <strong>TAMBAH JURUSAN</strong>


    </div>
    <div class="card-body card-block">
        <form action="{{URL::to('/admin/manage_major/add_major')}}" method="POST" class="form-horizontal">
            @csrf


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jurusan" class=" form-control-label">Jurusan</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="major" placeholder="Masukkan Jurusan" class="form-control @error('major') is-invalid @enderror" value="{{old('major')}}" required>
                    @error('major')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror       
               </div>
           </div>


           <button type="submit" class="btn btn-primary btn-sm">Submit
           </button>
           <a href="/admin/manage_major" class="btn btn-danger btn-sm">Cancel</a>
       </form>
   </div>
   <div class="card-footer">
   </div>
</div>
@endsection