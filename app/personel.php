<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personel extends Model
{
    protected $table = 'personel';
    protected $fillable = ['ad','soyad','departman_id','adres_id'];
    public $timestamps=false;
    protected $guarded='id';
}
