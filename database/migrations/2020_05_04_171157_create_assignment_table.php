<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('id_grade');
            $table->unsignedBigInteger('id_subject');
            $table->unsignedBigInteger('id_chapter');
            $table->foreign('id_grade')->references('id')->on('grade');
            $table->foreign('id_subject')->references('id')->on('subject');
            $table->foreign('id_chapter')->references('id')->on('chapter');
            $table->string('url');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('assignment');
    }
}
