<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruanglingkup extends Model
{
    use HasFactory;
    protected $primarykey = 'ruanglingkup_id';

    protected $fillable = [
        'ruanglingkup_id',
        'ruanglingkup_lokasi',
        'ruanglingkup_kelompokukur',
        'ruanglingkup_instrument',
        'ruanglingkup_frekuensi',
        'ruanglingkup_rentangukur',
        'ruanglingkup_ketidakpastian',
    ]
}
