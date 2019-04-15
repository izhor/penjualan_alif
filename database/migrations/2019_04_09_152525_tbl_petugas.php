<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblPetugas', function (Blueprint $table) {
            $table->bigIncrements('IDPetugas');
            $table->text('NamaPetugas');
            $table->text('Alamat');
            $table->string('Email')->unique();
            $table->integer('Telpon');
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
        Schema::dropIfExists('TblPetugas');
    }
}
