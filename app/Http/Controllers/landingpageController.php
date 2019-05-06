<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class landingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder(8)->get();
        return view('frontend.landing-page')->with('products',$products);
    }


}
