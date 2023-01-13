<?php

namespace Database\Seeders;

use App\Models\Surat_Perjanjian;
use Illuminate\Database\Seeder;

class SuratPerjanjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Surat_Perjanjian::create([
            'nomor_surat' => '1/21',
            'peminjam_id' => 1,
            'user_id' => 1,
            'tanggal_pembuatan' => '2023-11-11'
        ]);
    }
}
