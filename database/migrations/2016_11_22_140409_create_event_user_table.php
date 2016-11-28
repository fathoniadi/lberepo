<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('even_user'))){
            Schema::create('event_user', function (Blueprint $table) {
                $table->increments('id');
                $table->string('text');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('event_id')->unsigned();
                $table->foreign('event_id')->references('id')->on('events');
                $table->timestamps();
            });
        }
    }
    public function down()
    {
        Schema::drop('event_user');
    }
}
