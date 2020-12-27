<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bumil')->nullable();
            $table->integer('usia')->nullable();
            $table->integer('hamil')->nullable();

            //pmt1
            $table->datetime('tgl1')->nullable();
            $table->integer('bb1')->nullable();
            $table->integer('lila1')->nullable();
            $table->integer('hb1')->nullable();
            $table->integer('jumlah1')->nullable();
            $table->integer('tt1')->nullable();

            // pmt2
            $table->datetime('tgl2')->nullable();
            $table->integer('bb2')->nullable();
            $table->integer('lila2')->nullable();
            $table->integer('hb2')->nullable();
            $table->integer('jumlah2')->nullable();
            $table->integer('tt2')->nullable();

            // pmt3
            $table->datetime('tgl3')->nullable();
            $table->integer('bb3')->nullable();
            $table->integer('lila3')->nullable();
            $table->integer('hb3')->nullable();
            $table->integer('jumlah3')->nullable();
            $table->integer('tt3')->nullable();
            $table->foreignId('author');
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
        Schema::dropIfExists('pmts');
    }
}
