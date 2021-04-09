<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->Id('sch_id');
            $table->foreignId('sch_class_id');
            $table->foreign('sch_class_id')->references('class_id')->on('classes');
            $table->foreignId('sch_day_hour_id');
            $table->foreign('sch_day_hour_id')->references('dh_id')->on('day_hours');
            $table->foreignId('sch_teacher_subject_id');
            $table->foreign('sch_teacher_subject_id')->references('ts_id')->on('teacher_subjects');
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
