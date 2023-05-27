<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKepribadian extends Model
{
    use HasFactory;

    protected $table = 'jenis_kepribadian';

    protected $fillable = [
        'personality',
        'deskripsi',
    ];
}
