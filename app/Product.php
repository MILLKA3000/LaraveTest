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
    protected $fillable = ['name','pictureurl', 'price', 'discount', 'title'];

    public static $rules = [
        'name' => 'required|max:100',
        'price' => 'required',
        'title' => 'required|max:150'
    ];

    public function indigrients()
    {
        return $this->hasMany('App\ProdToInd','product_id');

    }
}
