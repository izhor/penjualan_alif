<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPenjualans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblPenjualans', function (Blueprint $table) {
            $table->bigIncrements('NoFaktur');
            $table->date('TglPenjualan');
            $table->bigInteger('IDPetugas')->unsigned();
            $table->foreign('IDPetugas')->references('IDPetugas')->on('TblPetugas')->onDelete('cascade');
            $table->integer('Bayar');
            $table->integer('Sisa');
            $table->integer('total');
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
        Schema::dropIfExists('TblPenjualans');
    }
}
