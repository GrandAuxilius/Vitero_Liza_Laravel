<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        $users = \DB::table('users')->count();
        $bill = \DB::table('bills')->count(); 
        $client = \DB::table('owners')->count();

        return view('home', compact('users', 'bill', 'client'));
    }
}