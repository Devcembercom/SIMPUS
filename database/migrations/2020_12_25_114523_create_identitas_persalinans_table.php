<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasPersalinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_persalinan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu', 35);
            $table->integer('umur');
            $table->string('nama_suami', 35);
            $table->text('alamat');
            $table->datetime('tgl_partus');
            $table->string('kondisi_ibu', 35);
            $table->string('jml_darah', 35);
            $table->boolean('partograf')->default(0);
            $table->string('kondisi_bayi', 10);
            $table->boolean('jk_bayi')->default(0);
            $table->string('bbl', 10);
            $table->boolean('imd')->default(0);
            $table->datetime('tgl_unijek');
            $table->datetime('tgl_vit_k');
            $table->string('jns_persalinan', 30);
            $table->string('petugas', 30);
            $table->string('status_bayar', 20);
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
        Schema::dropIfExists('identitas_persalinan');
    }
}
