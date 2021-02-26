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
            $table->id('schedule_id');
            // $table->bigInteger('user_id')->nullable()->unsigned();
            // $table->foreign('user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreignId('sch_teacher_id');
            $table->foreign('sch_teacher_id')->references('teacher_id')->on('teachers');
            $table->foreignId('sch_class_id');
            $table->foreign('sch_class_id')->references('class_id')->on('classes');
            $table->foreignId('sch_school_year_id');
            $table->foreign('sch_school_year_id')->references('school_year_id')->on('school_years');
            $table->foreignId('sch_subject_id');
            $table->foreign('sch_subject_id')->references('subject_id')->on('subjects');
            $table->string('day');
            $table->string('lesson_to');
            $table->time('hour');
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