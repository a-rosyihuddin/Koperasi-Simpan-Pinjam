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
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string("nama_peminjam");
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->integer('nominal_pinjaman');
            $table->date('waktu_pelunasan');
            $table->integer('total_pinjaman');
            $table->integer('jumlah_jaminan');
            $table->string('bunga');
            $table->string('angsuran');
            $table->string('ketentuan');
            $table->enum('status', [0, 1])->default(1);
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
        Schema::dropIfExists('peminjams');
    }
};
