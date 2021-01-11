<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $primarykey = 'feedback_id';
    protected $fillable =[
        'feedback_id',
        'feedback_nama',
        'feedback_perusahaan',
        'feedback_lab',
        'feedback_pesan',
    ];
}
