<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniformSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uniform_schedules', function (Blueprint $table) {
            $table->id('unf_id');
            $table->foreignId('unf_day_id');
            $table->foreign('unf_day_id')->references('day_id')->on('days');
            $table->string('unf_name_uniform');
            $table->string('unf_week');
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
        Schema::dropIfExists('uniform_schedules');
    }
}