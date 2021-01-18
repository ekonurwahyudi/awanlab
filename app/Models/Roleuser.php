<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roleuser extends Model
{
    use HasFactory;

    protected $table = "model_has_roles";

    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
