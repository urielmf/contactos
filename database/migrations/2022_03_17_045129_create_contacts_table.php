<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->String('nombre')->nullable();
            $table->String('apellido_p')->nullable();
            $table->String('apellido_m')->nullable();
            $table->dateTime('fecha_nacimiento')->nullable();
            $table->String('direccion',500)->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->bigInteger('celular')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
