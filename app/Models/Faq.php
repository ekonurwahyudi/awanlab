<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $primarykey = 'faq_id';

    protected $fillable = [
        'faq_id',
        'faq_pertayaan',
        'faq_jawaban',
    ];
}
