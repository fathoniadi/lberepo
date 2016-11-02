<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriesTable extends Migration
{
    public function up()
    {
        if(!(Schema::hasTable('laboratories'))){
            Schema::create('laboratories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
            });
        }
    }
    public function down()
    {
        Schema::drop('laboratories');
    }
}
