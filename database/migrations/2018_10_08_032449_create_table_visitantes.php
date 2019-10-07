<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVisitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();

            $table->unsignedInteger('escola_id')->nullable(false);
            $table->unsignedInteger('curso_id')->nullable(true);

            $table->foreign('escola_id')->references('id')->on('escolas');
            $table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::dropIfExists('visitantes');
    }
}
