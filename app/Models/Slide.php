<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $primaryKey = 'slide_id';

    protected $fillable = [
        'slide_id',
        'slide_judul',
        'slide_gambar_id',
        'slide_gambar_en'
    ];
}
