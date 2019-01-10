<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satinAlma extends Model
{
    protected $table='satinalma';
    protected $fillable=['urun_id','tedarikci_id','miktar','fiyar'];
    public $timestamps=false;
    protected $guarded='id';
}
