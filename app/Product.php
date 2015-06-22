<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

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

    static function total_price_one_qty($product)
    {
        return $product->price - ($product->price * ($product->discount/100));
    }

    static function total_price_all_qty($product)
    {
        return Product::total_price_one_qty($product)*$product->qty;
    }


    public function indigrients()
    {
        return $this->hasMany('App\ProdToInd','product_id');
    }

    public function getCategory()
    {
        return $this->hasOne('App\category', 'id','category_id');
    }

    static function getCart(){
        $cookies_products = Cookie::get('cart');
        if(!isset($cookies_products)) return false;
        $total_price =0;
        $products = Product::find(array_flatten(array_pluck($cookies_products, 'product_id')));

        foreach($products as $product){
            foreach($cookies_products as $product_as_coocies) {
                if ($product->id == $product_as_coocies['product_id']) {
                    $product->qty = $product_as_coocies['qty'];
                }
            }
            $total_price = $total_price + Product::total_price_all_qty($product);
        }
        return compact('products','total_price');
    }
}
