<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipvojskesTable extends Migration
{
    public function up()
    {
        Schema::create('tipvojskes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv_tipvojske')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
