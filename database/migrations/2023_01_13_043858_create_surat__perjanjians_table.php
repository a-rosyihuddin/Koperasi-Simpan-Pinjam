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
        Schema::create('surat__perjanjians', function (Blueprint $table) {
            $table->id();
            $table->string("nomor_surat")->uniqid;
            $table->foreignId('peminjam_id')->constrained('peminjams', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users', 'id')->onUpdate('restrict')->onDelete('restrict');
            $table->date("tanggal_pembuatan");
            $table->string('saksi_1');
            $table->string('saksi_2');
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
        Schema::dropIfExists('surat__perjanjians');
    }
};
