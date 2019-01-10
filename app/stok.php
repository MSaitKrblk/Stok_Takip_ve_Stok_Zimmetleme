<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table='stok';
    protected $fillable=['depo_id','urun_id','miktar'];
    public $timestamps=false;
    protected $guarded='id';
}
