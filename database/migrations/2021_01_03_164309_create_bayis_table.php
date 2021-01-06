<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jorong', 100);
            $table->string('nama_posyandu',50);
            $table->integer('jumlah_umur');

            $table->integer('jumlah_bayi1');
            $table->integer('eklusif1');
            $table->integer('persen1');

            $table->integer('jumlah_bayi2');
            $table->integer('eklusif2');
            $table->integer('persen2');

            $table->integer('jumlah_bayi3');
            $table->integer('eklusif3');
            $table->integer('persen3');

            $table->integer('jumlah_bayi4');
            $table->integer('eklusif4');
            $table->integer('persen4');

            $table->integer('jumlah_bayi5');
            $table->integer('eklusif5');
            $table->integer('persen5');

            $table->integer('jumlah_bayi6');
            $table->integer('eklusif6');
            $table->integer('persen6');

            $table->integer('jumlah_bayi7');
            $table->integer('eklusif7');
            $table->integer('persen7');
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
        Schema::dropIfExists('bayis');
    }
}
