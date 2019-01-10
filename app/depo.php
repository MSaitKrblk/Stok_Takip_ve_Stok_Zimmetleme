<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class depo extends Model
{
    protected $table='depo';
    protected $fillable=['urun_id','depo_id','miktar'];
    public $timestamps=false;
    protected $guarded='id';
}
