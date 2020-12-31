<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasK1STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_k1', function (Blueprint $table) {
            $table->id();
            $table->string('bulan', 20);
            $table->string('nama_ibu', 100);
            $table->integer('umur');
            $table->text('alamat');
            $table->string('nama_suami', 100);
            $table->integer('hamil_ke');
            $table->string('hpht', 100);
            $table->integer('usia_hamil');
            $table->string('jenis_resiko', 100);
            $table->string('dpt_buku', 100);
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
        Schema::dropIfExists('identitas_k1');
    }
}
