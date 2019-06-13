<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\User;
use App\Order;
use App\RentOrder;
use App\OrderDetail;
use App\City;
use App\Rentbike;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         
        // $data = [

        //      'bikes' => Product::latest()->where('product_category_id', '1')->get(),
        //      'parts' => Product::latest()->where('product_category_id', '2')->get(),
        //      'accessories' => Product::latest()->where('product_category_id', '3')->get()
        // ];
       
            $data=[


                'orders' => Order::where('status', 'pending')->get()->count(),
                'products' => Product::all()->count(),
                'rentOrders' => RentOrder::where('status', 'pending')->get()->count(),
                'users' => User::all()->count(),

            ];
                return view('admin_dashboard')->with($data);
            
        
        // return redirect('admin_dashboard/orders');
    }

    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin_dashboard.add_product')->with('categories', $categories);
    }

    public function addrent()
    {
        $cities = City::all();

        return view('admin_dashboard.add_rent')->with('cities', $cities)->with('success','Your product has been added successfully!');
    }

    public function inventory()
    {
         $data = [

             'bikes' => Product::latest()->where('product_category_id', '1')->get(),
             'parts' => Product::latest()->where('product_category_id', '2')->get(),
             'accessories' => Product::latest()->where('product_category_id', '3')->get(),
             'rentBike' => Rentbike::all(),

        ];

        return view('admin_dashboard.inventory')->with($data);
    }

    public function users()
    {
        $users = User::where('role_id', '1')->get();

        return view('admin_dashboard.users')->with('users', $users);
    }

    public function orders()
    {
        $data = [


                'rentOrders' => RentOrder::latest()->get(),
                'orders' => Order::latest()->get()
        ];
                return view('admin_dashboard.orders')->with($data);
        
    }

    public function admin_profile()
    {
        return view('admin_dashboard.admin_profile');
    }

    public function blockUser(User $user)
    {
        $user->status = 'blocked';
        $user->save();
        return back()->with('success', 'User has been blocked!');
    }

    public function unblockUser(User $user)
    {
        $user->status = 'active';
        $user->save();
        return back()->with('success', 'User has been unblocked!');
    }

}
