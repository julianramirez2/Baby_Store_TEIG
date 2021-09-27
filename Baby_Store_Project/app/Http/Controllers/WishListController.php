<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WishListController extends Controller
{
    public function index(Request $request)
    {
        $data = []; //to be sent to the view

        $listProducts = array();
        $listProducts = Product::all();

        $listProductsInWishlist = array();
        $ids = $request->session()->get("products"); //obtenemos ids de productos guardados en session


        if($ids){
            $listProductsInWishlist = Product::find($ids);
        }

        $data["title"] = "Wishlist";
        $data["products"] = $listProducts;
        $data["productsInWishlist"] = $listProductsInWishlist;

        return view('user.wishlist')->with("data",$data);
    }

    public function add ($id, Request $request)
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
