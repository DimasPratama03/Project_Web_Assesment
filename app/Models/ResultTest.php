<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultTest extends Model
{
    use HasFactory;

    protected $primaryKey = 'google_id';
    public $incrementing = false;

    protected $table = 'result_tes';

    protected $fillable = [
        'google_id',
        'value_introvert',
        'value_extrovert',
        'personality',
        'date',
        'date_expired',
    ];
}