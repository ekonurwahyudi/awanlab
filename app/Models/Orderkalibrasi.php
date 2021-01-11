<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderkalibrasi extends Model
{
    use HasFactory;
    protected $primarykey = 'order_id';
    protected $fillable = [
        'order_id',
        'order_ccl',
        'order_namaalat',
        'order_model',
        'order_merek',
        'order_sn',
        'order_jumlah',
        'order_lokasilab',
        'order_jeniskal',
        'order_namaser',
        'order_alamatser',
        'order_filesph',
        'order_statussph',
        'order_filepo',
        'order_status',
        'order_teknisi',
        'order_tglantar',
    ];
}
