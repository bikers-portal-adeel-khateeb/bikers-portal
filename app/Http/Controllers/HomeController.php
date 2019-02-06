<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$data = [

             'bikes' => Product::latest()->where('product_category_id', '1')->take(1)->get(),
             'parts' => Product::latest()->where('product_category_id', '2')->take(1)->get(),
             'accessories' => Product::latest()->where('product_category_id', '3')->take(1)->get()
        ];
       


    	// $pageData = [

    	// 'bikes' => Product::where('product_category_id', '1')->get(),
    	
    	// 'parts' => Product::where('product_category_id', '2')->get(),
    	

    	// 'accessories' => Product::where('product_category_id', '3')->get(),

    	// ];

    	return view('home')->with($data);


    }
}


