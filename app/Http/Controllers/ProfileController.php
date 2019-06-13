<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Order;
use App\RentOrder;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show()

    { 
        $data= [
        'orders'  =>Order::latest()->where('user_id',auth()->id())->get(),
        'rentOrders' =>RentOrder::latest()->where('user_id',auth()->id())->get(),
        'user' => auth()->user(),

        /*'orders'  =>Order::latest()->where('user_id',auth()->user()->id)->get(),
        'rentOrders' =>Order::latest()->where('user_id',auth()->user()->id)->get(),*/
        ];

        return view('profile.profile')->with($data);
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {   
       return view('profile.edit')->with('profile',$profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        // if (Hash::check(request('old_password'), $profile->password)) 
        // {}

        $savingProfile = request()->validate([
            'name' => ['required'],
            'contact' => ['required'],
            'address' => ['required'],
            // 'password'=> ['required','confirmed'] 

        ]);

        $profile->update($savingProfile);
        return redirect()->route('profile')->with('success', 'Your Profile has been added successfully!');
                

    }

    public function editPassword(User $profile)
    {   
       return view('profile.password')->with('profile',$profile);
    }

    public function updatePassword(Request $request, User $profile)
    {
        if (Hash::check(request('old_password'), $profile->password)) 
        {

        $savingProfile = request()->validate([
            
            'password'=> ['required','confirmed'] 

        ]);

        $password = Hash::make((request('password')));
        $profile->password = $password;
        $profile->save();
        return redirect()->route('profile')->with('success', 'Your Password has been changed successfully!');
            }

            return back()->with('error', 'Password does not matches');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
