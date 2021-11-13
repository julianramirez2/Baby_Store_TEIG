<?php

/**
 * @author Sebastián Urrego García
 */

namespace App\Http\Controllers;

use App\Models\Order;
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

    public function orderPDF()
    {
        $order = Order::all();
        $user = auth()->user();
        $showOrder = $order->where('userID', $user->getId());

        $pdf = PDF::loadView('order.pdf', compact('showOrder'));
        return $pdf->download('cart.pdf');
    }
}
