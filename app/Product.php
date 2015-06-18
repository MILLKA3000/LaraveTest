<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','discount','category_id', 'price', 'active', 'arhive', 'title','time'];

    public static $rules = [
        'name' => 'required|max:100',
        'title' => 'required|max:100',
        'price' => 'required',
        'time' => 'required|max:3'
    ];


    public function indigrients()
    {
        return $this->hasMany('App\ProdToInd','product_id');
    }

    public function getCategory()
    {
        return $this->hasOne('App\category', 'id','category_id');
    }
}
