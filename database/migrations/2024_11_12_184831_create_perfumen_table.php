<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfumen', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('nombre');
            $table->text('notas');
            $table->string('tamaño');
            $table->timestamps();
        });
    }

    /**
    
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfumen');
    }
}