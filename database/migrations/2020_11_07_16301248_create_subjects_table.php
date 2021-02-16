<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->foreignId('sbj_class_id');
            $table->foreign('sbj_class_id')->references('class_id')->on('classes');
            $table->foreignId('sbj_major_id');
            $table->foreign('sbj_major_id')->references('major_id')->on('majors');
            $table->string('name_subject');
            $table->string('school_year');
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
        Schema::dropIfExists('subjects');
    }
}
