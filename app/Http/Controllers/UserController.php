<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function addUser(Request $request) 
    {
        $userData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);

        User::create($userData);
        return view('users', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (request()->has('edit')) {
            $username = $request->input('username');
            $password = $request->input('password');
            $name = $request->input('name');
        
            User::where('id', $id)
                ->update([
                    'username' => $username,
                    'password' => $password,
                    'name' => $name
                ]);
            return Redirect::to('users')
                ->with(compact('users'));
        }
        return view('users', compact('users'));
    }

    public function destroy($id)
    {
        User::where('id', $id)
            ->delete();
        return Redirect::to('users');
    }
}