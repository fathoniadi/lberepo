<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('users'))){
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('nrp');
                $table->string('password');
                $table->string('phone');
                $table->rememberToken();
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories');
                $table->integer('laboratory_id')->unsigned();
                $table->foreign('laboratory_id')->references('id')->on('laboratories');
                $table->string('lineID');
                $table->timestamps();
            });
        }
    }
    public function down()
    {
        Schema::drop('users');
    }
}
