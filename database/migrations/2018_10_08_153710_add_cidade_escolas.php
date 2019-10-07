<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCidadeEscolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('escolas', function (Blueprint $table) {
            $table->string('uf',2)->nullable(false)->after('nome');
            $table->string('cidade')->nullable(false)->after('nome');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('escolas', function (Blueprint $table) {
            $table->dropColumn('uf');
            $table->dropColumn('cidade');
        });
    }
}
