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
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreignId('sbj_subject_id');
            $table->foreign('sbj_subject_id')->references('subject_id')->on('subjects');
            $table->string('day');
            $table->date('date');
            $table->time('hour');
            $table->timestamps();
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
