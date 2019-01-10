<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urunEmanet extends Model
{
    protected $table='urunemanet';
    protected $fillable=['personel_id','urum_id'];
    public $timestamps=false;
    protected $guarded='id';
}
