<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblBarangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblBarangs', function (Blueprint $table) {
            $table->bigIncrements('KodeBarang');
            $table->string('NamaBarang',128);
            $table->bigInteger('KodeJenis')->unsigned();
            $table->foreign('KodeJenis')->references('KodeJenis')->on('TblJenisBarangs')->onDelete('cascade');
            $table->integer('HargaNet');
            $table->integer('HargaJual');
            $table->integer('Stok');
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
        Schema::dropIfExists('TblBarangs');
    }
}
