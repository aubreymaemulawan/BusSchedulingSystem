<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fare extends Migration
{
    public function up()
    {
        Schema::create('fare',function(Blueprint $table){
            $table->increments('id');
            $table->integer('route_id');
            $table->integer('bustype_id');
            $table->float('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fare');
    }
};
