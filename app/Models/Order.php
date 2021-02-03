<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orderkalibrasis";

    // Membuat Relasi Order dengan User
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
