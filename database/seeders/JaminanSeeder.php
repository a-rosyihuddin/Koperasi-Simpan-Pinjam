<?php

namespace Database\Seeders;

use App\Models\Jaminan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JaminanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jaminan::create([
            'peminjam_id' => 1,
            'roda' => 2,
            'merk' => 'Honda',
            'tahun' => 1999,
            'warna' => 'Hitam',
            'nomor_polisi' => 'W 3472 LP',
            'nomor_rangka' => 'MHYKZE81SCJ154045',
            'nomor_mesin' => 'DF26382',
            'nomor_bpkb' => 'SB8678Nbs8',
            'atas_nama' => 'Ahmad'
        ]);
        Jaminan::create([
            'peminjam_id' => 2,
            'roda' => 2,
            'merk' => 'Honda',
            'tahun' => 1999,
            'warna' => 'Hitam',
            'nomor_polisi' => 'W 3472 LP',
            'nomor_rangka' => 'MHYKZD1SWCJ154045',
            'nomor_mesin' => 'DF26382',
            'nomor_bpkb' => 'SB8678Nbs8',
            'atas_nama' => 'Ahmad'
        ]);
        Jaminan::create([
            'peminjam_id' => 3,
            'roda' => 2,
            'merk' => 'Honda',
            'tahun' => 1999,
            'warna' => 'Hitam',
            'nomor_polisi' => 'W 3472 LP',
            'nomor_rangka' => 'M H Y K Z E 8 1 S C J 1 5 4 0 4 5',
            'nomor_mesin' => 'DF26382',
            'nomor_bpkb' => 'SB8678Nbs8',
            'atas_nama' => 'Ahmad'
        ]);
    }
}
