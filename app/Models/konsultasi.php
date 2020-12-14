<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'konsultasi_id';
    protected $fillable = [
        'konsultasi_id',
        'konsultasi_nama',
        'konsultasi_hp',
        'konsultasi_email',
        'konsultasi_pesan'
    ];
}
