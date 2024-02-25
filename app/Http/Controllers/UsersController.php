<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function create()
    {
        $users = User::latest();

        if (request('search')) {
            $users
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('department_unit', 'like', '%' . request('search') . '%')
                ->orWhere('user_role', 'like', '%' . request('search') . '%');
        }

        return view('users', [
            'users' => $users->paginate(10)
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'department_unit' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        $attributes['password'] = Hash::make($attributes['email']);

        $user = User::create($attributes);

        return redirect()->route('users', ['user' => $user->id])->with('success', 'User Created');
    }

    public function dashboard(User $user, Reports $reports)
    {
        $totalUsers =$user->count();
        $totalReports = Auth::user()->reports()->count();
        return view('dashboard',[
            'user'=> $totalUsers,
            'reports'=>$totalReports
        ]);
    }
}
