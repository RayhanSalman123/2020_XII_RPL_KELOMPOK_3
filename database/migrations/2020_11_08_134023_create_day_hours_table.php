<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_hours', function (Blueprint $table) {
            $table->id('dh_id');
            $table->foreignId('id_day');
            $table->foreign('id_day')->references('day_id')->on('days');
            $table->foreignId('id_hour');
            $table->foreign('id_hour')->references('hour_id')->on('hours');
            $table->string('dh_notes')->nullable();
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
        Schema::dropIfExists('day_hours');
    }
}