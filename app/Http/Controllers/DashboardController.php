<?php

namespace App\Http\Controllers;

use Flash;
use App\Product;
use App\category;
use App\Indigrient;
use App\Categoryindigrient;
use Validator;
use App\ProdToInd;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{

    private function _getAllCategoryIndigrient(){
        return Categoryindigrient::all();
    }

    private function _getProduct($id){
        return Product::find($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        Flash::message('Вітаємо вас в адмін панелі!!');

        return view('dashboard.hello', [
            'products_count' => Product::all()->count(),
            'products_arhive_count'=>Product::all()->where('arhive',0)->count()]);
    }

    public function categoryindex(){
        return view('dashboard.category.index', ['category' => category::paginate(10)]);
    }

    public function productindex(){
        return view('dashboard.product.index', ['products' => Product::orderBy('id', 'desc')->paginate(10)]);
    }

    public function indiindex(){
        return view('dashboard.indigradient.index', ['indi' => Indigrient::paginate(10)]);
    }

    public function catingindex(){
        return view('dashboard.category.index', ['category' => Categoryindigrient::paginate(10)]);
    }


    public function productcreate(Product $product){
        $product->category = category::all();
        $product->indigrients = Indigrient::all();
        $url = '/dashboard/product/store';
        return view('dashboard.product.create', ['product' => $product,'url'=>$url]);
    }


    public function productstore(){
        $input = \Input::all();
        $validation = Validator::make($input, Product::$rules);

        if($validation->fails()){
            Flash::error('Продукт не створений!');
            return redirect()->back()
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Валідація не пройшла.');
        }

        if($validation->passes()){
            Product::create($input);
            Flash::success('Продукт створений!');
            return redirect('/dashboard/product/index');
        }
    }


    public function attradd($id){
        return view('dashboard.indigradient.attr', [
            'category' => $this->_getAllCategoryIndigrient(),
            'product'=> $this->_getProduct($id),
            'url'=> "/dashboard/product/index"
        ]);
    }


    public function attrsave(){
        $input = \Input::all();

        $validation = Validator::make($input, ProdToInd::$rules);

        if($validation->fails()){
            echo "No validate";
        }

        if($validation->passes()){
            $input = array_except($input, array('_token'));
            ProdToInd::insert($input);
        }
    }
}
