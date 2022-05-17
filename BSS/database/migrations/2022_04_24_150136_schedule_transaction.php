<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScheduleTransaction extends Migration
{
    public function up()
    {
        Schema::create('schedule_transaction',function(Blueprint $table){
            $table->increments('id');
            $table->integer('schedule_id');
            $table->integer('transaction_id');
            $table->integer('total_passengers');
            $table->float('total_amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedule_transaction');
    }
};
