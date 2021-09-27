<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data = []; //to be sent to the view

        $listProducts = array();
        $listProducts = Product::all();

        $listProductsInCart = array();
        $ids = $request->session()->get("products"); //obtenemos ids de productos guardados en session
        
        
        if($ids){
            $listProductsInCart = Product::find($ids);
        }

        $data["title"] = "Cart";
        $data["products"] = $listProducts;
        $data["productsInCart"] = $listProductsInCart;

        return view('user.cart')->with("data",$data);
    }

    public function add($id, Request $request)
    {
        $products = $request->session()->get("products");
        $products[$id] = $id;
        $request->session()->put('products', $products);
        return back();
    }

    public function removeAll(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }
}
