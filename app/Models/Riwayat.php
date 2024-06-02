<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
    protected $fillable = ['nominal', 'tanggal', 'keterangan', 'user_id', 'tipe', 'created_at', 'updated_at'];
}
