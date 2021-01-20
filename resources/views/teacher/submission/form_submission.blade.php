@extends('layouts.teacher.master')

@section('content')
<div class="card">
    <div class="card-header">
        Form
        <strong>Pengajuan</strong>
    </div>

    <div class="card-body card-block">
        <form action="" method="post" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Nama Guru</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Nama Guru" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="mata pelajaran" class=" form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Mata Pelajaran" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="nama guru" class=" form-control-label">Hari</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Hari" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-sm-5">
                    <label for="jenis kelamin" class=" form-control-label">Jam</label>
                </div>
                <div class="col col-sm-6">
                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Jam" class="form-control">
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <!-- <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button> -->
    </div>
@endsection