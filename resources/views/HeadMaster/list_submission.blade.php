@extends('layouts.head_master.master')

@section('content')
    <div class="col-md-12">
         <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>XII</td>
                        <td>RPL</td>
                        <td>
                            <!-- <a  href="#" class="btn btn-danger" type="Button">DELETE</a> -->
                            <a href="/list_cek_schedule" class="btn btn-outline-success">Check</a>
                        </td>
                    </tr>
                </tbody>
            </table>
         </div>
                    <!-- END DATA TABLE-->
    </div>
@endsection