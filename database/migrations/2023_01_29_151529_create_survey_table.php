<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumni_id');
            $table->text('question_1_a')->nullable();
            $table->text('question_1_b')->nullable();
            $table->text('question_1_yes')->nullable();
            $table->text('question_2')->nullable();
            $table->text('question_3')->nullable();
            $table->text('question_4')->nullable();
            $table->text('question_5')->nullable();
            $table->text('question_6')->nullable();
            $table->text('question_7_a')->nullable();
            $table->text('question_7_b')->nullable();
            $table->text('question_7_c')->nullable();
            $table->text('question_7_d')->nullable();
            $table->text('question_7_e')->nullable();
            $table->text('question_7_f')->nullable();               
            $table->text('question_8')->nullable();
            $table->text('question_9')->nullable();
            $table->text('question_10')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('alumni_id')->references('id')->on('alumni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_responses');
    }
}
