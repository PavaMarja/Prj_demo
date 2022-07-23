<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipvojskeVojskePivotTable extends Migration
{
    public function up()
    {
        Schema::create('tipvojske_vojske', function (Blueprint $table) {
            $table->unsignedBigInteger('vojske_id');
            $table->foreign('vojske_id', 'vojske_id_fk_7031534')->references('id')->on('vojskes')->onDelete('cascade');
            $table->unsignedBigInteger('tipvojske_id');
            $table->foreign('tipvojske_id', 'tipvojske_id_fk_7031534')->references('id')->on('tipvojskes')->onDelete('cascade');
        });
    }
}
