<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question', function ($table) {
            $table->text('correct_answer')->change();
            $table->text('answer_1')->nullable()->change();
            $table->text('answer_2')->nullable()->change();
            $table->text('answer_3')->nullable()->change();
        });
        Schema::table('result_test_detail', function ($table) {
            $table->text('answer')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
