<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('categories'))){
            Schema::create('categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('laboratory_id')->unsigned();
                $table->foreign('laboratory_id')->references('id')->on('laboratories');
                $table->timestamps();
            });
        }
    }
    public function down()
    {
        Schema::drop('categories');
    }
}
