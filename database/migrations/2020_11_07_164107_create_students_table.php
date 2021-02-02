<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreignId('st_class_id');
            $table->foreign('st_class_id')->references('class_id')->on('classes');
            $table->string('nis');
            $table->string('gender');
            $table->integer('school_year');
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
        Schema::dropIfExists('students');
    }
}
