<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){
        $products= Product::orderBy('id', 'DESC')->get();
        return view('frontend.pages.home.index',compact('products'));
    }

    public function about(){
        return view('frontend.pages.about.index');
    }
    public function product(){

        $products= Product::orderBy('id', 'DESC')->get();
        return view('frontend.pages.product.index',compact('products'));
    }
}
