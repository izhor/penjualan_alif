<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDetailBarangMasuks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblDetailBarangMasuks', function (Blueprint $table) {
            $table->bigInteger('NoNota')->unsigned();
            $table->foreign('NoNota')->references('NoNota')->on('TblBarangMasuks')->onDelete('cascade');
            $table->integer('KodeBarang');
            $table->integer('jumlah');
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
        Schema::dropIfExists('TblDetailBarangMasuks');
    }
}
