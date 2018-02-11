<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function getView(){
        $products = Product::all();
        // dd($products);
        // die;
        return view('welcome',compact('products'));
    }
    function getAbout(){
        return view('about');
    }
    function getCart(){
        return view('cart');
    }
    function getContact(){
        return view('contact');
    }
    function getCheckOut(){
        return view('checkout');
    }
}
