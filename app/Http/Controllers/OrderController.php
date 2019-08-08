<?php

namespace App\Http\Controllers;

use App\Order;
use App\Address;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('checkout');
    }

    public function placeOrder()
    {
        if (request()->has('address_different')) {
            $addresses = request()->validate([
            "billing_firstname" => ['required'],
            "billing_lastname" => ['required'],
            "billing_address" => ['required'],
            "billing_country" => ['required'],
            "billing_city" => ['required'],
            "billing_zip" => ['required'],
            "billing_phone" => ['required'],

            "shipping_firstname" => ['required'],
            "shipping_lastname" => ['required'],
            "shipping_address" => ['required'],
            "shipping_country" => ['required'],
            "shipping_city" => ['required'],
            "shipping_zip" => ['required'],
            "shipping_phone" => ['required']
        ]);
        }
        else {
            $addresses = request()->validate([
            "billing_firstname" => ['required'],
            "billing_lastname" => ['required'],
            "billing_address" => ['required'],
            "billing_country" => ['required'],
            "billing_city" => ['required'],
            "billing_zip" => ['required'],
            "billing_phone" => ['required']
        ]);
        }
            if (session('cart')) {
                $stored_address = Address::create($addresses);
                $order = Order::create([
                        'user_id' => auth()->user()->id,
                        'address_id' => $stored_address->id,
                        'total' => session()->get('total')
                ]);

                foreach (session('cart') as $id => $item) {
                    $orderDetail = [
                        'order_id' => $order->id,
                        'product_id' => $id,
                        'quantity' => $item['quantity'],
                        'price' => $item['price']
                    ];
                    OrderDetail::create($orderDetail);
                }
                request()->session()->forget('cart');
                return view('thanks');

            }
                else {
                        return redirect('/cart');
                     }
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin_dashboard.order_detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
   public function reject(Order $order)
    {
        // if ($order->status != 'accepted') {
            # code...
      $order->status = 'rejected';
      $order->save();
        // }
      return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function accept(Order $order)
    {
        // if ($order->status != 'canceled') {
        //     # code...
      $order->status = 'accepted';
      $order->save();
        // }
      return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
