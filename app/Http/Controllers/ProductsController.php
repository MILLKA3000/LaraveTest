<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

        $products->titletext = 'Новинки';

        return view('product.index', ['products' => $products]);
    }


    public function show($id)
    {
        return view('product.show', [
            'product'=> Product::find($id),
            'url'=>'/cart/add'
        ]);
    }


    private function setCookies($data)
    {
        Cookie::queue(Cookie::make('cart', $data, 'minutes'));
    }

    private function find_repeat($xx,$yy){
        for($i=0;$i<count($xx);$i++){
            if ($xx[$i]['product_id'] == $yy['product_id']){
                (int)$xx[$i]['qty']=$xx[$i]['qty']+$yy['qty'];
                return $xx;
            }
        }
        array_push($xx,$yy);
        return $xx;
    }

    public function CartAdd(Request $request){
        $input = \Input::all();
        if (Cookie::get('cart')==null){
            $this->setCookies($this->find_repeat([],$input));
        }else{
            $this->setCookies($this->find_repeat(Cookie::get('cart'),$input));
        }
        return redirect()->back();
    }
}
