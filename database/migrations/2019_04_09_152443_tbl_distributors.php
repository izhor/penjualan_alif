<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDistributors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblDistributors', function (Blueprint $table) {
            $table->bigIncrements('IDDistributor');
            $table->text('NamaDsitributor');
            $table->string('Alamat');
            $table->string('KotaAsal');
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
        Schema::dropIfExists('TblDistributors');
    }
}
