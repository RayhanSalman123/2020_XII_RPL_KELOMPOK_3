@extends('layouts.admin.master')

@section('content')
    <div class="col-md-12">

        @foreach ($class as $dataClass)
            <div class="card">
                <div class="card-header">
                    <h2 class="text-left">
                        {{ $dataClass->grade_name . ' ' . $dataClass->major_name . '  ' . $dataClass->group }} <a href="{{URL::to('/admin/list_schedule/edit_schedule')}}/{<!-- {$schedule->schedule_id -->}}/edit" value="EDIT" class="btn btn-outline-info fa fa-pencil-square-o"></a></h2>

                </div>
                <div class="card-body" style="font-size: 8px;">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" style="width: 100%;">

                            <thead>
                            <tr>

                                @foreach ($day as $dataDay)
                                    <th class="text-left" style="width: 18%">{{ $dataDay->day_name }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($i = 1; $i <= 11; $i++) { ?>
                            <?php 
                            if($i == 5 OR $i == 8){
                                ?> <tr>
                                       <td class="bg-warning text-white text-center">Istirahat</td>
                                       <td class="bg-warning text-white text-center">Istirahat</td>
                                       <td class="bg-warning text-white text-center">Istirahat</td>
                                       <td class="bg-warning text-white text-center">Istirahat</td>
                                       <td class="bg-warning text-white text-center">Istirahat</td>
                                 </tr>

                                 <?php
                                }
                                 
                            ?>
                            <tr
                                class="text-left">
                                <?php for ($d = 2; $d <= 6; $d++) { ?>

                                 @forelse(\App\Helpers\Jadwal::MapelDay($dataClass->class_id,$d, $i) as $Mapel)
                                    <td class="text-left">
                                        {{ $Mapel->name_subject . ' ' . ' - ' . ' ' . $Mapel->usr_name }}
                                    </td>
                                @empty
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                @endforelse


                                <?php } ?>
                            </tr>
                            <?php } ?>


                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
    @endforeach

    <!-- END DATA TABLE-->
    </div>
@endsection
