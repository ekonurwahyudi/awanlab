<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = "users";

    public function telepon(){
        return $this->hasOne('App\Models\Telepon');
    }
}
