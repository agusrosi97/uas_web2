<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    public function nasabahs() {
    	return $this->belongsTo('App\Nasabah');
    }

    public function transaksis() {
    	return $this->hasMany('App\Transaksi');
    }
}
