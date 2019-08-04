<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{

	protected $fillable = ['nama','alamat','hp'];
  protected $primaryKey = 'id';
  public function rekenings() {
  	return $this->hasOne('App\Rekening');
  }
  public function transaksis() {
  	return $this->hasMany('App\Transaksis');
  }
}
