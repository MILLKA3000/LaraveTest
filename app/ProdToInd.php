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
    protected $fillable = ['name','pictureurl','title'];

    public static $rules = [
        'weight' => 'required',
        'title' => 'required|max:150'
    ];

    public function indigrientname()
    {
        return $this->hasManyThrough('App\Indigrient','App\ProdToInd','indigrient_id','id');
    }
}
