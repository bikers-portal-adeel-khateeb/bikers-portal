<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Product $product)
    {
        $cart = session()->get('cart');

        if(!$cart)
        {
            // $cart = [

            //     $product->id => [

            //         'name' => $product->name,
            //         'quantity' => 1,
            //         'price' => $product->price,
            //         'image' => $product->image

            //     ]


            // ];

            $cart[$product->id] = [

            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'image' => $product->image

        ];

            session()->put('cart', $cart);

            if (request()->has('buy_it_now')) {
        
     return redirect()->route('checkout');
 }

            return back()->with('success', 'Product Added to Cart Succeccfully!');
        }

        if(isset($cart[$product->id]))
        {
            if (request()->has('buy_it_now')) {
     
     return redirect()->route('checkout');
 }
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);

            return back()->with('success', 'Product Added to Cart Succeccfully!');

        }

        $cart[$product->id] = [

            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'image' => $product->image

        ];

        session()->put('cart', $cart);

         if (request()->has('buy_it_now')) {
     
     return redirect()->route('checkout');
 }

        return back()->with('success', 'Product Added to Cart Succeccfully!');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $cart = session()->get('cart');
        
        if (isset($cart[$id])) {
            
        
        if ($id and $request->quantity) {
            # code...
        
        // $cart = session()->get('cart');
        $cart[$id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
        session()->flash('success', 'Cart Updated Successfully!');
        }
    }
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request, $id)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product Removed Successfully');
        }

        return back();
    }
}
