<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $primarykey = 'id_perusahaan';
    protected $fillable = [
        'id_perusahaan',
        'nama_perusahaan',
        'alamat_perusahaan',
        'telepon_perusahaan',
        'npwp_perusahaan',
    ];
}
