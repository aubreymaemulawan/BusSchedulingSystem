<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    public function up()
    {
        Schema::create('transaction',function(Blueprint $table){
            $table->increments('id');
            $table->integer('fare_id');
            $table->integer('discount_id');
            $table->integer('no_passenger');
            $table->float('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
