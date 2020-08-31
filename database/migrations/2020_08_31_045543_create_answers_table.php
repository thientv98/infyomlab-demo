<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned()->nullable()->default(null);
            $table->string('title')->nullbable()->default(null);
            $table->tinyInteger('is_correct')->default('0');
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('priority')->default('1');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
