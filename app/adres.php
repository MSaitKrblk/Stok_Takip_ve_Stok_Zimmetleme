<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adres extends Model
{
    protected $table='adres';
    protected $fillable=['il','ilce','acikAdres'];
    public $timestamps=false;
    protected $guarded='id';
}
