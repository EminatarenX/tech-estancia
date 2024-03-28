<?php

namespace App\Http\Controllers;


class MatesController extends Controller 
{
    public function index()
    {
        return view('dashboard.team.create');
    }

}