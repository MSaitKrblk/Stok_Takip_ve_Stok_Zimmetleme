<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tedarikci extends Model
{
    protected $table = 'tedarikci';
    protected $fillable = ['unvan','adres_id'];
    public $timestamps=false;
    protected $guarded='id';
}
