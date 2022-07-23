<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOruzjaTipvojskePivotTable extends Migration
{
    public function up()
    {
        Schema::create('oruzja_tipvojske', function (Blueprint $table) {
            $table->unsignedBigInteger('tipvojske_id');
            $table->foreign('tipvojske_id', 'tipvojske_id_fk_7031599')->references('id')->on('tipvojskes')->onDelete('cascade');
            $table->unsignedBigInteger('oruzja_id');
            $table->foreign('oruzja_id', 'oruzja_id_fk_7031599')->references('id')->on('oruzjas')->onDelete('cascade');
        });
    }
}
