<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaminans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjam_id')->constrained('peminjams', 'id');
            $table->integer('jumlah_jaminan');
            $table->string('roda');
            $table->string('merk');
            $table->string('tahun');
            $table->string('warna');
            $table->string('nomor_polisi');
            $table->string('nomor_rangka');
            $table->string('nomor_mesin');
            $table->string('nomor_bpkb');
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
        Schema::dropIfExists('jaminans');
    }
};
