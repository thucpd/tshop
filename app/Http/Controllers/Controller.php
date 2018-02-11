<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function getView(){
        return view('welcome');
    }
    function getAbout(){
        return view('aout');
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
