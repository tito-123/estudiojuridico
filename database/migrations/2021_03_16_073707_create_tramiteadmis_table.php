<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramiteadmisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramiteadmis', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipotramite');
            $table->string('estado');
            $table->string('personas');
            $table->date('cita');
            $table->biginteger('idcliente')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idcliente')->references('id')->on('clientes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tramiteadmis');
    }
}
