<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function nasabahs() {
    	return $this->belongsTo('App\Nasabah', 'id_nasabah');
    }

    public function rekenings() {
    	return $this->belongsTo('App\Rekening', 'id_rekening');
    }
    public function sampahs() {
    	return $this->belongsTo('App\Sampah', 'id_sampah');
    }
}
