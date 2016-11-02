<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('feedback'))){
            Schema::create('feedback', function (Blueprint $table) {
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
        Schema::drop('feedback');
    }
}
