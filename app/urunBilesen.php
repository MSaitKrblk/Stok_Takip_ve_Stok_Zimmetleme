<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urunBilesen extends Model
{
    protected $table='urunbilesen';
    protected $fillable=['marka','isim','foto','urun_id'];
    public $timestamps=false;
    protected $guarded='id';
}
