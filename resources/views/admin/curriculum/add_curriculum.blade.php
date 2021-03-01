@extends('layouts.admin.master')

@section('content')
<div class="card">
    <div class="card-header">
        
        <strong>TAMBAH KURIKULUM</strong>


    </div>
    <div class="card-body card-block">
        <form action="{{URL::to('/admin/list_curriculum/add_curriculum')}}" method="POST" class="form-horizontal">
            @csrf


            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="kurikulum" class=" form-control-label">Kurikulum</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" name="curriculum_name" placeholder="Masukkan Kurikulum" class="form-control @error('curriculum_name') is-invalid @enderror" value="{{old('curriculum_name')}}" required>
                    @error('curriculum_name')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                   @enderror       
               </div>
           </div>


           <button type="submit" class="btn btn-primary btn-sm">Submit
           </button>
           <a href="/admin/list_curriculum" class="btn btn-danger btn-sm">Cancel</a>
       </form>
   </div>
   <div class="card-footer">
   </div>
</div>
@endsection