<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('usuario_id')->unsigned()->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('semestre');
            $table->string('email')->unique();
            $table->string('genero');
            $table->string('telefono');
            $table->string('programa');
            $table->string('universidad');



            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
