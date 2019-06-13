<?php

namespace App\Http\Controllers;
use App\City;
use App\Rentbike;
use App\Address;
use App\RentOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

         return view('rent')->with('cities',$cities);

    }

     public function askRent(Rentbike $rentbike)
    {  
        $validated = request()->validate([

    'start_date' => 'required|date|after:today',
    'end_date' => 'required|date|after:start_date'

]);





$start_date = new Carbon(request('start_date'));

$end_date = new Carbon(request('end_date'));

$difference = $start_date->diff($end_date)->days;





         $rentOrder=[
        'start_date' => request('start_date'),
        'end_date' => request('end_date'),
        'rent'=>   $rentbike->rent,
        'rentbike_id' => $rentbike->id,
        'bike'        => $rentbike->name,
        'days'=>$difference

        ];
         session()->put('rentOrder', $rentOrder);
 
     return view('rental.rent_checkout')->with($rentOrder);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function rentbike()
    {
        $bikes= Rentbike::where('city_id',request('city'))->get();
        return view('rental.rent_bike')->with('bikes',$bikes);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRent(Request $request)
    {
        
        $this->validate(request(), [

            'city'     => 'required',
            'name'         => 'required',
            'description'  => 'required',
            'rent'        => 'required',
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


        Rentbike::create([

            'city_id' => request('city'),
            'name'               => request('name'),   
            'description' => request('description'),   
            'rent' => request('rent'), 
            'option' => request('option'),   
            'image' =>  $fileNameToStore

        ]);

        return redirect('/admin_dashboard/addRent');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Rentbike  $rentbike
     * @return \Illuminate\Http\Response
     */
    public function show(Rentbike $rentbike)
    {
        return view('rental.rent_detail', compact('rentbike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rentbike  $rentbike
     * @return \Illuminate\Http\Response
     */
    public function edit(Rentbike $rentbike)
    {
        return view('rental.edit_rent_bike', compact('rentbike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rentbike  $rentbike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rentbike $rentbike)
    {
         
        $this->validate(request(), [

            'name'         => 'required',
            'description'  => 'required',
            'rent'        => 'required',
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
                $fileNameToStore = $rentbike->image;
        }


        $rentbike->update([

            'name'               => request('name'),   
            'description' => request('description'),   
            'rent' => request('rent'), 
            'option' => request('option'),   
            'image' =>  $fileNameToStore

        ]);

        return redirect()->route('inventory')->with('success', 'Ret bike has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rentbike  $rentbike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentbike $rentbike)
    {
        $rentbike->delete();
        return back()->with('success', 'Rent bike has benn deleted successfully!');

    }

    public function placeRentOrder()
    {   

         $addresses = request()->validate(
            [
            "billing_firstname" => ['required'],
            "billing_lastname" => ['required'],
             "billing_address" => ['required'],
            "billing_country" => ['required'],
            "billing_city" => ['required'],
            "billing_zip" => ['required'],
            "billing_phone" => ['required'],
            ]
            );

     
        $rentOrder=session()->get('rentOrder');

          $stored_address = Address::create($addresses);
           $order = RentOrder::create([
                        'user_id' => auth()->user()->id,
                        'address_id' => $stored_address->id,
                        'rentbike_id'=> $rentOrder['rentbike_id'],
                        'bike'       => $rentOrder['bike'],
                        'rent' =>       $rentOrder['rent'],
                        'start_date' => $rentOrder['start_date'],
                        'end_date' =>   $rentOrder['end_date'],
                        'days'      =>  $rentOrder['days'], 
                            
                ]);         
               request()->session()->forget('rentOrder');
                  

                     return view('thanks');

    }
}
