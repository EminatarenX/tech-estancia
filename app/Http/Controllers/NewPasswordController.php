<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewPasswordController extends Controller 
{
     public function index()
     {
        return view('auth.new-password');
     }

     public function store(Request $request)
     {
        Validator::validate($request->all(), [
            'password' => 'required',
        ]);

        $user = User::where('token', $request->token)->first();
        $user->password = Hash::make($request->password);
        $user->token = null;
        $user->save();
        return redirect()->route('dashboard')->with('success','Password changed successfully!');
     }
}