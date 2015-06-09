<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {

    public function index($name)
    {
        return view('layouts.chils',['sssss'=>$name,'name'=>'milka']);
    }

}