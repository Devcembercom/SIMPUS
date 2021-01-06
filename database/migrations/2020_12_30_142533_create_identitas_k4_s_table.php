<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasK4STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_k4', function (Blueprint $table) {
            $table->id();
            $table->string('bulan', 20);
            $table->string('nama_ibu', 100);
            $table->integer('umur');
            $table->text('alamat');
            $table->string('nama_suami', 100);
            $table->date('tgl_k4');
            $table->text('masalah');
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
        Schema::dropIfExists('identitas_k4');
    }
}
