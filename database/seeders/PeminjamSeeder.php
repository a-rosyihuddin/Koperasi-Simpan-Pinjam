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
            'waktu_pelunasan' => '3',
            'total_pinjaman' => 25000,
            'jumlah_jaminan' => 2
        ]);
        Peminjam::create([
            'nama_peminjam' => 'Fajar',
            'alamat' => 'Jalan Air Langga No. 3 RT 02 RW 01 Desa Ngawen',
            'pekerjaan' => 'Mahasiswa',
            'nominal_pinjaman' => 20000,
            'waktu_pelunasan' => '2',
            'total_pinjaman' => 25000,
            'jumlah_jaminan' => 2
        ]);
        Peminjam::create([
            'nama_peminjam' => 'Ahmad Fanani',
            'alamat' => 'RT 02 RW 12 Desa Ngoro kecamatan Ngoro Kabupaten Sidayu',
            'pekerjaan' => 'Buruh',
            'nominal_pinjaman' => 20000,
            'waktu_pelunasan' => '2',
            'total_pinjaman' => 25000,
            'jumlah_jaminan' => 2
        ]);
    }
}
