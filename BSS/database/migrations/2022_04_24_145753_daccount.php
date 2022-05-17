<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Daccount extends Migration
{
    public function up()
    {
        Schema::create('daccount',function(Blueprint $table){
            $table->increments('id');
            $table->integer('dispatcher_id')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daccount');
    }
};
