<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function create() 
    {   
        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'department' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        $attributes['password'] = Hash::make($attributes['email']);

        $user = User::create($attributes);

        return redirect()->route('profile.update', ['user' => $user->id])->with('success', 'User Created');    }
    
}
