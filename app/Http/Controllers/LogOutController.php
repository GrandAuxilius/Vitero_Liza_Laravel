<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('index');
    }
}