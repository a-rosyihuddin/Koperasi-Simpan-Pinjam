<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_Perjanjian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
