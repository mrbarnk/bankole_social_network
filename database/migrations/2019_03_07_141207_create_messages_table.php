<?php

// Copyright Bankole Emmnauel 2019 
// mrbarnk.COM

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from');
            $table->string('to')->nullable();
            $table->string('message')->nullable();
            $table->string('status');
            $table->string('encryption');
            $table->string('is_deleted_by_who');
            $table->string('followers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
