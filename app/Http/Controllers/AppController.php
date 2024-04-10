<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AppController extends Controller
{
    public function index() {
        return view('index');
    }
    public function catalog(){
        // $team = User::where('role', 'admin')->paginate(9);
     
        // return view('dashboard.team.index',[
        //     'team' => $team
        // ]);

        $products = Product::all()->paginate(9);
        return view('products', [
            'products' => $products
        ]);
    }
}
