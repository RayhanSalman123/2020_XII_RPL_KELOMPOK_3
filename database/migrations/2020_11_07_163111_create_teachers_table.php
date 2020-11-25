<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreignId('tcr_subject_id');
            $table->foreign('tcr_subject_id')->references('subject_id')->on('subjects');
            $table->integer('nip')->nullable();
            $table->string('gender');
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
        Schema::dropIfExists('teachers');
    }
}
