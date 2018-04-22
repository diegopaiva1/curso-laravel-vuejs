<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBicicletasTable extends Migration
{

    public function up()
    {
        Schema::create('bicicletas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bicicletas');
    }
}
