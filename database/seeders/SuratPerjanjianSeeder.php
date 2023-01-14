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
            'nomor_surat' => 'A/1/ABC/02.PK/2023',
            'peminjam_id' => 1,
            'user_id' => 1,
            'tanggal_pembuatan' => '2023-11-11'
        ]);
        Surat_Perjanjian::create([
            'nomor_surat' => 'A/2/ABC/02.PK/2023',
            'peminjam_id' => 2,
            'user_id' => 1,
            'tanggal_pembuatan' => '2023-11-11'
        ]);
        Surat_Perjanjian::create([
            'nomor_surat' => 'A/3/ABC/02.PK/2023',
            'peminjam_id' => 3,
            'user_id' => 1,
            'tanggal_pembuatan' => '2023-11-11'
        ]);
    }
}
