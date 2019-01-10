<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kullanicilar extends Model
{
    protected $table = 'kullanicilar';
    protected $fillable = ['personel_id','sifre','ePosta','rol_id'];
    public $timestamps=false;
    protected $guarded='id';
}
