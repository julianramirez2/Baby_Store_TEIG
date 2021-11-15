<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Item;
use Carbon\Carbon;

use Barryvdh\DomPDF\Facade as PDF;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data = []; //to be sent to the view

        $listProducts = array();
        $listProducts = Product::all();

        $listProductsInCart = array();
        $ids = $request->session()->get("products"); //obtenemos ids de productos guardados en session


        if ($ids) {
            $listProductsInCart = Product::find($ids);
        }

        $data["title"] = "Cart";
        $data["products"] = $listProducts;
        $data["productsInCart"] = $listProductsInCart;

        return view('user.cart')->with("data", $data);
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

    public function pdf(Request $request)
    {
        $data = []; //to be sent to the view

        $listProducts = array();
        $listProducts = Product::all();

        $listProductsInCart = array();
        $ids = $request->session()->get("products"); //obtenemos ids de productos guardados en session


        if ($ids) {
            $listProductsInCart = Product::find($ids);
        }

        $data["title"] = "cart";
        $data["products"] = $listProducts;
        $data["productsInCart"] = $listProductsInCart;

        $pdf = PDF::loadView('user.pdf', compact('data', 'listProductsInCart'));
        return $pdf->download('cart.pdf');
    }

    public function checkout(Request $request)
    {
        $products = $request->session()->get("products");
        $listProductsInCart = Product::find($products);
        $total = 0;
        if ($products) {
            $order = new Order();
            $order -> setTotal(0);
            $order -> setDate(Carbon::now());
            if (auth()->check()) {
                $order -> setUserId(auth()->user()->id);
            }
            $order -> save();
            foreach ($listProductsInCart as $prod) {
                $item = new item();
                $item -> setOrderId($order->getId());
                $item -> setProductId($prod->getId());
                $item -> setSubtotal($prod->getPrice());
                $item -> setQuantity(1);
                $total += $prod->getPrice()*1;
                $item->save();
            }
            $order->setTotal($total);
            $order->save();
        }
        
       // $request->session()->forget('products');
        return redirect()->route('order.showOrder');
    }
}
