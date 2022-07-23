<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTipvojskesTable extends Migration
{
    public function up()
    {
        Schema::table('tipvojskes', function (Blueprint $table) {
            $table->unsignedBigInteger('rodvojske_id')->nullable();
            $table->foreign('rodvojske_id', 'rodvojske_fk_7036857')->references('id')->on('rodvojskes');
        });
    }
}
