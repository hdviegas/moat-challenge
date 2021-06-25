<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function insert(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => ['required']
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return $user ? redirect()->route('login')->with(['registered' => true]) : back()->withInput()->withErrors('Unable to register User');
    }
}
