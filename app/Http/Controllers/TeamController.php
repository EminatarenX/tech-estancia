<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeamController extends Controller
{
    public function index()
    {
        // solo role = admin
        $team = User::where('role', 'admin')->paginate(9);
     
        return view('dashboard.team.index',[
            'team' => $team
        ]);
    }
    public function user(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.team.user', [
            'user' => $user
        ]);
    }


}
