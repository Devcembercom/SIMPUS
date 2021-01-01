<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnemiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anemias', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu', 100);
            $table->string('alamat');
            $table->datetime('lahir')->nullable();
            $table->datetime('ditemukan')->nullable();
            $table->integer('bb')->nullable();
            $table->integer('tb')->nullable();
            $table->integer('lila')->nullable();
            $table->integer('hb')->nullable();
            $table->string('protein')->nullable();
            $table->string('siha')->nullable();
            $table->integer('hamil')->nullable();
            $table->string('intervansi')->nullable();
            $table->string('nama_suami', 35);
            $table->string('pekerjaan', 35);
            $table->string('status', 35);
            $table->string('bpjs', 35);
            $table->string('kasus', 35);
            $table->string('ket', 35);
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
        Schema::dropIfExists('anemias');
    }
}
