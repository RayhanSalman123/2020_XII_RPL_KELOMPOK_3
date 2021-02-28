@extends('layouts.admin.master')

@section('content')
    <div class="col-md-12">

        @foreach($class as $dataClass)
            <div class="card">
                <div class="card-header">
                    <h2 class="text-left">{{$dataClass->grade_name . ' ' . $dataClass->major_name  . '  ' . $dataClass->group}}</h2>
                </div>
                <div class="card-body" style="font-size: 8px;">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3" style="width: 100%;">

                            <thead>
                            <tr>
                                <th class="text-left">Jam</th>
                                @foreach($day as $dataDay)
                                    <th class="text-left" style="width: 18%">{{$dataDay->days_name}}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($no = 1; $no <= 10; $no++){ ?>

                            @forelse(\App\Helpers\Jadwal::MapelJam($dataClass->class_id, $no) as $dataMapel)
                                <tr class="text-left">
                                    <td class="text-left">{{$dataMapel->start_time . ' - ' . $dataMapel->end_time}}</td>
                                    <?php
                                    for ($noDay = 2; $noDay <= 6; $noDay++)     {
                                    ?>
                                    @forelse (\App\Helpers\Jadwal::MapelDay($dataClass->class_id,$noDay, $no) as $Mapel)
                                        <td class="text-left">{{$Mapel->name_subject.' '.' - '.' '.$Mapel->usr_name}}</td>
                                    @empty
                                        <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    @endforelse
                                    <?php  } ?>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>
                                    <td class="text-left text-white" style="background-color: darkred">Kosong</td>

                                </tr>


                            @endforelse

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
