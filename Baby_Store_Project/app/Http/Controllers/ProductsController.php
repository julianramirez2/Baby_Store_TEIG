<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('productsAdmin.index',compact('products'));
    }

    public function create(){
        return view('productsAdmin.create');
    }

    public function store(Request $request){
        $product = new Product();
        $product -> name = $request -> name;
        $product -> description = $request -> description;
        $product -> price = $request -> price;
        $product -> category = $request -> category;
        $product -> stock = $request -> stock;

        $product->save();

        return redirect()->route('productsAdmin.index');
    }

    

    public function edit($id){
        $product = Product::find($id);

        return view('productsAdmin.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('productsAdmin.index');
    }

    public function userSearch(Request $request){

        $busqueda = $request->get('productName');

        $products = Product::where('name','like',"%$busqueda%")->paginate(2);
        
        return view('user.products',compact('products'));
    }

    public function orderByName(){

        $products = Product::orderBy('name')->paginate(2);
        
        return view('user.products',compact('products'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product -> delete();

        return redirect()->route('productsAdmin.index');
    }

}
