<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
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
        return view('admin_dashboard');
    }

    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin_dashboard.add_product')->with('categories', $categories);
    }
}
