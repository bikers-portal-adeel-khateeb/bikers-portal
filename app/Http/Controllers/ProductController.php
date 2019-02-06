<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $this->validate(request(), [

            'category'     => 'required',
            'name'         => 'required',
            'description'  => 'required',
            'price'        => 'required',
            'option'       => 'required',
            'image'        => 'image|nullable|max:1999'
            
        ]);

       // handle file upload here
        if ($request->hasFile('image')) {
            // Get filename with the extension
             $filenameWithExt = $request->file('image')->getClientOriginalName();

            // Get just filename
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;

           //upload image
           $path = $request->file('image')->storeAs('public/image', $fileNameToStore);

        }
        else{
                $fileNameToStore = 'no image.jpg';
        }


        Product::create([

            'product_category_id' => request('category'),
            'name'               => request('name'),   
            'description' => request('description'),   
            'price' => request('price'), 
            'option' => request('option'),   
            'image' =>  $fileNameToStore

        ]);

        return redirect('/admin_dashboard/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
