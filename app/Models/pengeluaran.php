<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $fillable = ['nominal', 'tanggal', 'keterangan', 'user_id', 'status', 'created_at', 'updated_at'];
}
