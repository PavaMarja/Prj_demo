<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRodvojskesTable extends Migration
{
    public function up()
    {
        Schema::create('rodvojskes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rodvojske')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
