<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departman extends Model
{
    protected $table='departman';
    protected $fillable=['departmanAdi','yonetici_id'];
    public $timestamps=false;
    protected $guarded='id';
}
