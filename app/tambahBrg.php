<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambahBrg extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'tblbarangs';
   protected $fillable = [
    'KodeJenis', 'NamaBarang', 'HargaNet','HargaJual','Stok',
];
}
