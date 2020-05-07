<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('id_grade');
            $table->unsignedBigInteger('id_subject');
            $table->unsignedBigInteger('id_chapter');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_grade')->references('id')->on('grade')->onDelete('cascade');
            $table->foreign('id_subject')->references('id')->on('subject')->onDelete('cascade');
            $table->foreign('id_chapter')->references('id')->on('chapter')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->text('content');
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
        Schema::dropIfExists('lesson');
    }
}
