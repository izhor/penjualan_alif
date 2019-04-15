<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblBarangMasuks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblBarangMasuks', function (Blueprint $table) {
            $table->bigIncrements('NoNota');
            $table->date('TglMasuk');
            $table->bigInteger('IDDistributor')->unsigned();
            $table->bigInteger('IDPetugas')->unsigned();
            $table->string('Total');
            $table->foreign('IDDistributor')->references('IDDistributor')->on('TblDistributors')->onDelete('cascade');
            $table->foreign('IDPetugas')->references('IDPetugas')->on('TblPetugas')->onDelete('cascade');
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
        Schema::dropIfExists('TblBarangMasuks');
    }
}
