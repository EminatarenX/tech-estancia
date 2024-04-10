<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.products.create');
    }
    public function show() {
        $products = Product::paginate(10);
        return view("dashboard.products.index",[
        'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        Validator::validate($request->all(),[
            'name' => 'required|unique:products',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'description' => 'required|min:10',
            'image' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        return redirect()->route('dashboard.index');
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.view', [
            'product' => $product
        ]);
    }


    public function destroy(Product $product){
        $product->delete();

        $imagen_path = public_path('uploads/').$product->image;

        if(File::exists($imagen_path)){
            unlink($imagen_path);
        }

        return redirect()->route('dashboard.index');
    }


  
}
