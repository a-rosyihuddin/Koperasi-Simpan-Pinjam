<?php

namespace Database\Seeders;

use App\Models\Peminjam;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjam::create([
            'nama_peminjam' => 'Ahmad',
            'alamat' => 'Gresik',
            'pekerjaan' => 'Buruh',
            'nominal_pinjaman' => 20000,
            'waktu_pelunasan' => '2001-03-02',
            'total_pinjaman' => 25000,
            'jumlah_jaminan' => 2
        ]);
    }
}
