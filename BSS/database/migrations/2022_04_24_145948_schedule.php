<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedule extends Migration
{
    public function up()
    {
        Schema::create('schedule',function(Blueprint $table){
            $table->increments('id');
            $table->date('date');
            $table->integer('company_id');
            $table->integer('bus_id');
            $table->integer('operator_id');
            $table->integer('dispatcher_id');
            $table->integer('route_id');
            $table->time('first_trip');
            $table->time('last_trip');
            $table->integer('interval_mins');
            $table->integer('max_trips');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedule');
    }
};
