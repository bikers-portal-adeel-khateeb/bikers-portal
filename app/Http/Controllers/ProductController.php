<?php

namespace App\Http\Controllers;
use Auth;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function cart()
    // {
    //     $auth_user = Auth::user()->id;
    //     $shopping = Cart::where('user_id', $auth_user)->get();

    //     return view('cart')->with('shopping', $shopping);
        
    // }

    // public function addCart(Request $request)
    // {
    //     Cart::create([

    //         'user_id'    => Auth::user()->id,
    //         'product_id' => request('product_id'),
    //         'qty'        => request('quantity')
    //     ]);

    //     return redirect('cart');
    // }

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
            'image'        => 'image|nullable|max:1999',
            'model'        => 'required'
            
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
            'image' =>  $fileNameToStore,
            'model' => request('model')

        ]);

        return back()->with('success', 'Your Product has been added successfully!');
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
        return view('admin_dashboard.edit_product', compact('product'));
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
        $this->validate(request(), [

            'name'         => 'required',
            'description'  => 'required',
            'price'        => 'required',
            'option'       => 'required',
            'image'        => 'image|nullable|max:1999',
            'model'        => 'required'
            
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
                $fileNameToStore = $product->image;
        }


        $product->update([

            'name'               => request('name'),   
            'description' => request('description'),   
            'price' => request('price'), 
            'option' => request('option'),   
            'image' =>  $fileNameToStore,
            'model' => request('model')

        ]);

        return redirect()->route('inventory')->with('success', 'Your Product has benn Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product has benn deleted successfully!');
    }

        // start fetching bikes from database with names
    public function kawasaki()
    {
        $bikes = Product::where('name', 'kawasaki')->get();
        return view('bikes.bikes', compact('bikes'));
    }

    public function yamaha()
    {
        $bikes = Product::where('name', 'yamaha')->get();
        return view('bikes.bikes', compact('bikes'));
    }

    public function suzuki()
    {
        $bikes = Product::where('name', 'suzuki')->get();
        return view('bikes.bikes', compact('bikes'));
    }

    public function honda()
    {
        $bikes = Product::where('name', 'honda')->get();
        return view('bikes.bikes', compact('bikes'));
    }
        // end fetching bikes data

        // start fetching parts data with names
    public function engineCovers()
    {
        $parts = Product::where('name','engine covers')->get();
        return view('parts.parts', compact('parts'));
    }

    public function brakeShoe()
    {
        $parts = Product::where('name','brake shoe')->get();
        return view('parts.parts', compact('parts'));
    }

    public function airCleaner()
    {
        $parts = Product::where('name','air cleaner')->get();
        return view('parts.parts', compact('parts'));
    }

    public function turnLights()
    {
        $parts = Product::where('name','turn lights')->get();
        return view('parts.parts', compact('parts'));
    }

    public function headlight()
    {
         $parts = Product::where('name','headlight')->get();
        return view('parts.parts', compact('parts'));
    }

    public function tyre()
    {
         $parts = Product::where('name','tyre')->get();
        return view('parts.parts', compact('parts'));
    }

    public function rim()
    {
         $parts = Product::where('name','rim')->get();
        return view('parts.parts', compact('parts'));
    }

    // end fetching parts data

   // start fetching accessories from database with names

    public function watches()
    {
         $accessories = Product::where('name','watches')->get();
        return view('accessories.accessories', compact('accessories'));
    }

    public function glasses()
    {
         $accessories = Product::where('name','glasses')->get();
        return view('accessories.accessories', compact('accessories'));
    }

    public function helmet()
    {
         $accessories = Product::where('name','helmet')->get();
        return view('accessories.accessories', compact('accessories'));
    }

    public function gloves()
    {
         $accessories = Product::where('name','gloves')->get();
        return view('accessories.accessories', compact('accessories'));
    }

    public function jacket()
    {
         $accessories = Product::where('name','jacket')->get();
        return view('accessories.accessories', compact('accessories'));
    }

    public function shoes()
    {
         $accessories = Product::where('name','shoes')->get();
        return view('accessories.accessories', compact('accessories'));
    }
    
    // end fetching accessories data

}
