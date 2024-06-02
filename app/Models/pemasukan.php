<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;
    protected $table = 'pemasukan';
    protected $fillable = ['nominal', 'tanggal', 'keterangan', 'user_id', 'status', 'created_at', 'updated_at'];
}
