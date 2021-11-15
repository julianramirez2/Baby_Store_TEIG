<?php

/**
 * @author Sebastián Urrego García
 */

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrdersController extends Controller
{
    public function show()
    {
        $order = Order::all();
        $user = auth()->user();
        $showOrder = $order->where('userID', $user->getId());
        return view('order.showOrder', compact('showOrder'));
    }

    public function orderPDF(Request $request)
    {
        $order = Order::all();
        $user = auth()->user();
        $showOrder = $order->where('userID', $user->getId());
        $ids = $request->session()->get("products");

        if ($ids) {
            $listProductsInCart = Product::find($ids);
        }

        $pdf = PDF::loadView('order.pdf', compact('showOrder','listProductsInCart'));

        return $pdf->download('order.pdf');
    }
}
