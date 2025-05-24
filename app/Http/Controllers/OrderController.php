<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function create() {
        return view('orders.create');
    }

    public function store(Request $request) {
        Order::create($request->only(['product_name', 'quantity']));
        return redirect()->back()->with('success', 'Order created!');
    }

}
