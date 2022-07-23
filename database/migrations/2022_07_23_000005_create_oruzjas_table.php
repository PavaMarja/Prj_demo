<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOruzjasTable extends Migration
{
    public function up()
    {
        Schema::create('oruzjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv_oruzja')->nullable();
            $table->integer('koef')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
