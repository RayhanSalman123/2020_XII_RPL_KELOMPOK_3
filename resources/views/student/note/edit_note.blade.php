@extends('layouts.student.master')

@section('content')
  <div class="card">
      <div class="card-header">
          Edit
        <strong>Catatan</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{URL::to('/student/update/'.$note->nt_id)}}" method="POST" class="form-horizontal">
          @csrf

        <div class="row form-group">
        <div class="col col-sm-5">
          <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
        </div>
        <div class="col col-sm-6">
          <select name="subject" class="form-control @error('subject') is-invalid @enderror" required>
            <option value="{{$note->subject_id}}" selected="" class="form-control">{{ $note->name_subject }}</option>
            @foreach($subject as $subject)
            <option value="{{$subject->subject_id}}">{{$subject->name_subject}}</option>
            @endforeach
          </select>
          @error('subject')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

<div class="row form-group">
    <div class="col col-sm-5">
      <label for="catatan" class=" form-control-label">Tanggal</label>
    </div>
    <div class="col col-sm-6">
        <input type="date"  name="nt_date" class="form-control" data-provide="datepicker" @error('nt_date') is-invalid @enderror" value="{{ $note->nt_date }}" required>
        @error('nt_date')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
       </span>
       @enderror 
    </div>
    </div>

    <div class="row form-group">
      <div class="col col-sm-5">
        <label for="catatan" class=" form-control-label">Catatan</label>
      </div>
      <div class="col col-sm-6">
        <input type="text" name="nt_name" placeholder="Masukkan Catatan" class="form-control @error('nt_name') is-invalid @enderror" value="{{ $note->nt_name }}" required>
        @error('nt_name')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
       </span>
       @enderror       
     </div>
     </div>
                <!-- /.card-body -->
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        <a href="/student/list_note" class="btn btn-danger btn-sm">Cancel</a>
      </form>
    </div>
  <div class="card-footer">
  </div>
</div>
@endsection
