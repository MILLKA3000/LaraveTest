<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoryindigrient extends Model
{

    protected $table = 'category_indigrients';

    public function getIndigrients()
    {
        return $this->hasMany('App\Indigrient','category_indigrient_id');
    }
}
