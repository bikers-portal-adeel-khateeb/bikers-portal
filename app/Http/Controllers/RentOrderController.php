<?php

namespace App\Http\Controllers;

use App\RentOrder;
use Illuminate\Http\Request;

class RentOrderController extends Controller
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
     * @param  \App\RentOrder  $rentOrder
     * @return \Illuminate\Http\Response
     */
    public function show(RentOrder $rentOrder)
    {
        //
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RentOrder  $rentOrder
     * @return \Illuminate\Http\Response
     */
    public function reject(RentOrder $rentOrder)
    {
        // if ($rentOrder->status != 'accepted') {
            # code...
      $rentOrder->status = 'rejected';
      $rentOrder->save();
        // }
      return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RentOrder  $rentOrder
     * @return \Illuminate\Http\Response
     */
    public function accept(RentOrder $rentOrder)
    {
        // if ($rentOrder->status != 'canceled') {
            # code...
      $rentOrder->status = 'accepted';
      $rentOrder->save();
        // }
       
      return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RentOrder  $rentOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentOrder $rentOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RentOrder  $rentOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentOrder $rentOrder)
    {
        //
    }
}
