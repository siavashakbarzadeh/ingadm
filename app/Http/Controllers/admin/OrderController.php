<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {
        $orders=Order::all();
        return view('Orders/orders-show',compact('orders'));

    }
    public function create()
    {
        return view('Orders/orders-create');
    }
    public function destroy(Order $order,$id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('orders-show')->with('success', 'order Data is successfully deleted');
    }
}
