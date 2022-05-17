<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StatusTrip extends Migration
{
    public function up()
    {
        Schema::create('status_trip',function(Blueprint $table){
            $table->increments('id');
            $table->integer('status_id');
            $table->integer('trip_id');
            $table->integer('trip_duration');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_trip');
    }
};
