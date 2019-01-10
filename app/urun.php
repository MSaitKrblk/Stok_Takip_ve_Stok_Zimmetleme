<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
    protected $table='urun';
    protected $fillable=['marka','isim','foto'];
    public $timestamps=false;
    protected $guarded='id';
}
