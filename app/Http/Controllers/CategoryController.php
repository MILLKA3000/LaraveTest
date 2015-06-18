<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Indigrient;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($category)
    {
        $products = Product::get()
            ->where('category_id',(int)$category)
            ->where('active',1)
            ->where('arhive',1);
        foreach ($products as $product){
            $q = $product->indigrients()->get();
            $name_indigradient = [];
            foreach ($q as $in){
                array_push($name_indigradient,Indigrient::find($in->indigrient_id));
            }
            $product->name_indigradient = $name_indigradient;
        }

        $products->titletext = 'Категорія ';

        return view('product.index', ['products' => $products]);
    }


}
