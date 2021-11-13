<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('productsAdmin.index', compact('products'));
    }

    public function create()
    {
        return view('productsAdmin.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('image')) {
            $destination_path='public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $product -> setName($request -> name);
            $product -> setDesc($request -> description);
            $product -> setPrice($request -> price);
            $product -> setCat($request -> category);
            $product -> setStock($request -> stock);
            $product -> setImage($image_name);

            $product->save();

            return redirect()->route('productsAdmin.index');
        } else {
        }
    }



    public function edit($id)
    {
        $product = Product::find($id);

        return view('productsAdmin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('productsAdmin.index');
    }

    public function userSearch(Request $request)
    {
        $busqueda = $request->get('productName');

        $products = Product::where('name', 'like', "%$busqueda%")->paginate(6);

        return view('user.products', compact('products'));
    }

    public function orderByName()
    {
        $products = Product::orderBy('name')->paginate(6);

        return view('user.products', compact('products'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product -> delete();

        return redirect()->route('productsAdmin.index');
    }
}
