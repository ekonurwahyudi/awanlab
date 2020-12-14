<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $primaryKey = 'artikel_id';

    protected $fillable = [
        'artikel_id',
        'artikel_gambar',
        'artikel_judul',
        'artikel_deskripsi',
        'artikel_editor',
        'artikel_date'
    ];
}
