<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function store(int $id) {
        $cart = [
            'username' => auth()->user()->username,
            'id_product' => $id
        ];
        
        $flag = DB::table('carts')
            ->where('username', $cart['username'])
            ->where('id_product', $cart['id_product'])
            ->count();

        if (!$flag) {
            DB::table('carts')->insert($cart);
        }
        
        return redirect('/');
    }

    public function show() {
        $products = DB::table('carts as c')
            ->select('p.id', 'p.name', 'p.description', 'p.price', 'p.supplier', 'c.id as cart_id')
            ->join('products as p', 'c.id_product', '=', 'p.id')
            ->join('users as u', 'c.username', '=', 'c.username')
            ->where('c.username', '=', auth()->user()->username)
            ->get();

        $user = DB::table('users')->where('username', auth()->user()->username)->first();

        return view('cart/show', [
            'products' => $products,
            'user' => $user
        ]);
    }

    public function destroy(int $id) {
        DB::table('carts')->where('id', $id)->delete();
        return redirect('/cart/show');
    }
}
