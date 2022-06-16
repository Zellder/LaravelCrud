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
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_tipo');
            $table->timestamps();
        });

        Schema::table('documentos', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on("tipo_documentos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentos', function (Blueprint $table) {
        $table->dropForeign('documentos_tipo_id');
        $table->dropColumn('tipo_id');
        });
        Schema::dropIfExists('tipo_documentos');
    }
};
