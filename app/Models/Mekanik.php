<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    public function transaksis(){
        return $this->belongTo(Transaksi::class);
    }
}
