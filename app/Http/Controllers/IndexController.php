<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Login logic here

        return redirect('/home');
    }

    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);
        
        // Create user logic here

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}