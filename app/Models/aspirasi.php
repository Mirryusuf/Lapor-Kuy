<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aspirasi extends Model
{
    protected $fillable = [
        'nik',
        'jenis_aspirasi',
        'aspirasi',
        'lokasi',
        'photo',
        'status',
        'created_at',
        'update_at'
    ];
}
