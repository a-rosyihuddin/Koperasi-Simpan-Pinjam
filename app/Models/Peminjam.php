<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function surat_perjanjian()
    {
        return $this->hasMany(Surat_Perjanjian::class);
    }
}
