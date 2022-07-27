<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function mekaniks(){
        return $this->hasOne(Mekanik::class,'id','mekaniks_id');
    }
}
