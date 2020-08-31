<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->nullable()->default(null);
            $table->string('email')->unique();
            $table->string('password')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->integer('province_id')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('text')->nullable()->default(null);
            $table->tinyInteger('status')->default(1);
            $table->string('create_user')->nullable()->default(null);
            $table->string('update_user')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
