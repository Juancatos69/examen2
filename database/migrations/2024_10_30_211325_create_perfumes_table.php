<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfumesTable extends Migration
{
    public function up()
    {
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('nombre');
            $table->text('notas');
            $table->float('tamaño'); // o string si prefieres
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfumes');
    }
}
