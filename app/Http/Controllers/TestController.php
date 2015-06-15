<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {

    public function index()
    {
        return view('layouts.chils',['name'=>'milka']);
    }

    public function endpoint(){
        return view('layouts.chils',['sssss'=>$name,'name'=>'milka']);
    }

}