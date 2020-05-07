<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_exam');
            $table->foreign('id_exam')->references('id')->on('exam')->onDelete('cascade');
            $table->unsignedBigInteger('id_level_question');
            $table->foreign('id_level_question')->references('id')->on('level_question')->onDelete('cascade');
            $table->integer('count');
            $table->double('percent');
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
        Schema::dropIfExists('exam_detail');
    }
}
