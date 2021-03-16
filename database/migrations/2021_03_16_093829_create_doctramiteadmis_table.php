<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctramiteadmisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctramiteadmis', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('clase');
            $table->string('documento');
            $table->biginteger('idtramiteadmi')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idtramiteadmi')->references('id')->on('tramiteadmis')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctramiteadmis');
    }
}
