<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() 
    {
        $users = Userscontroller::all();
        return view('users', compact('users'));
    }
    
    public function update(Userscontroller $user) 
    {
        // ...
    }
    
    public function destroy(Userscontroller $user) 
    {
        // ...
    }
}