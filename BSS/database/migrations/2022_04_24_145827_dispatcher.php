<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dispatcher extends Migration
{
    public function up()
    {
        Schema::create('dispatcher',function(Blueprint $table){
            $table->increments('id');
            $table->integer('company_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('contact_no');
            $table->integer('age');
            $table->string('address');
            $table->string('profile_name')->nullable();
            $table->string('profile_path')->nullable();
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dispatcher');
    }
};
