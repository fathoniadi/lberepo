<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('events'))){
            Schema::create('events', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('mentor');
                $table->date('date');
                $table->integer('laboratory_id')->unsigned();
                $table->foreign('laboratory_id')->references('id')->on('laboratories');
                $table->timestamps();
            });
        }
    }
    public function down()
    {
        Schema::drop('events');
    }
}
