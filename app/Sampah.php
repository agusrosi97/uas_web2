<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
	protected $fillable = ['jenis_sampah','harga'];
  protected $primaryKey = 'id';
  public function transaksis() {
  	return $this->hasMany('App\Transaksi');
  }
}
