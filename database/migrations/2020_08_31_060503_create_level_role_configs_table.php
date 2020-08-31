<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelRoleConfigsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_role_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned()->nullable()->default(null);
            $table->integer('role_id')->unsigned()->nullable()->default(null);
            $table->integer('from_point')->default(0);
            $table->integer('end_point')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->integer('priority')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('level_role_configs');
    }
}
