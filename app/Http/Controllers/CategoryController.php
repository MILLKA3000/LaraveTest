<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;

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

        $products->titletext = 'Категорія: '.category::find((int)$category)->name;

        return view('product.index', ['products' => $products]);
    }

}
