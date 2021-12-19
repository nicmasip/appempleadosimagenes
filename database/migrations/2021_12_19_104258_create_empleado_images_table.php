<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_image', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idempleado')->unsigned();
            $table->string('caption', 200);
            $table->string('filename', 200);
            $table->string('mimetype', 200);
            $table->foreign('idempleado')->references('id')->on('empleado')->onUpdate('cascade')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_image');
    }
}
