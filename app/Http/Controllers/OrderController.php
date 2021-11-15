<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create_one(int $id) {
        return view('order/create', [
            'user' => User::getUserByUsername(auth()->user()->username),
            'product' => Product::getProductById($id)
        ]);
    }

    public function create() {
        return view('order/create', [
            'user' => User::getUserByUsername(auth()->user()->username),
            'products' => Cart::getProductsByUsername(auth()->user()->username),
            // 'shippers' => Shipper::()
        ]);
    }

    public function store(Request $request) {

    }
}