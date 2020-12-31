<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_balita')->nullable();
            $table->integer('usia')->nullable();
            $table->string('ibu')->nullable();
            $table->datetime('lahir')->nullable();
            $table->string('alamat')->nullable();

            //pmt1
            $table->datetime('tgl1')->nullable();
            $table->integer('bb1')->nullable();
            $table->string('jumlah1')->nullable();
            $table->integer('tt1')->nullable();

            // pmt2
            $table->datetime('tgl2')->nullable();
            $table->integer('bb2')->nullable();
            $table->string('jumlah2')->nullable();
            $table->integer('tt2')->nullable();

            // pmt3
            $table->datetime('tgl3')->nullable();
            $table->integer('bb3')->nullable();
            $table->string('jumlah3')->nullable();
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
        Schema::dropIfExists('mps');
    }
}
