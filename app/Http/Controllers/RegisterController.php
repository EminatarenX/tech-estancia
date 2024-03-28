<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        Validator::validate($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6',
            
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'super'
        ]);

        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard.index');
    }
}
