<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDetailPenjualans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblDetailPenjualans', function (Blueprint $table) {
            $table->bigInteger('NoFaktur')->unsigned();
            $table->foreign('NoFaktur')->references('NoFaktur')->on('TblPenjualans')->onDelete('cascade');
            $table->BigInteger('KodeBarang')->unsigned();
            $table->foreign('KodeBarang')->references('KodeBarang')->on('TblBarangs')->onDelete('cascade');
            $table->integer('Jumlah');
            $table->integer('Subtotal');
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
        Schema::dropIfExists('TblDetailPenjualans');
    }
}
