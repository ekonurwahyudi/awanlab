<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbackweb extends Model
{
    use HasFactory;
    protected $primarykey = 'feedbackwebs';
    protected $fillable = [
        'id',
        'nama',
        'role',
        'kategori',
        'ss_error',
        'isifeedback',
    ];
}
