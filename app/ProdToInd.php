<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdToInd extends Model
{
    protected $table = 'producttoindigrients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','indigrient_id','weight'];

    public static $rules = [
        'product_id' => 'required',
        'indigrient_id' => 'required',
        'weight' => 'required'
    ];

    public function indigrientname()
    {
        return $this->hasOne('App\Indigrient','id','indigrient_id');
    }
}
