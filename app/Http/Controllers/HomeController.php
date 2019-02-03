<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class HomeController extends Controller
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
        // Auth::id();

        $customer = Customer::find(1);
        // foreach ($customers as $customer) {
        //     echo "{$customer->name} age: {$customer->age} <br>";
        // }
        return view('customer', ['c' => $customer]);
    }
}
