<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Indigrient;
use App\ProdToInd;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')
            ->where('active',1)
            ->where('arhive',1)
            ->take(5)
            ->get();
        foreach ($products as $product){
            $q = $product->indigrients()->get();
            $name_indigradient = [];
            foreach ($q as $in){
                array_push($name_indigradient,Indigrient::find($in->indigrient_id));
            }
            $product->name_indigradient = $name_indigradient;
        }
        $products->titletext = 'Новинки';

        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
