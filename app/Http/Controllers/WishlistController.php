<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function store(int $id) {
        $wishlist = [
            'username' => auth()->user()->username,
            'id_product' => $id
        ];
        
        $flag = DB::table('wishlists')
            ->where('username', $wishlist['username'])
            ->where('id_product', $wishlist['id_product'])
            ->count();

        if (!$flag) {
            DB::table('wishlists')->insert($wishlist);
        }
        
        return redirect('/');
    }

    public function show() {
        $products = DB::table('wishlists as w')
            ->select('p.id', 'p.name', 'p.description', 'p.price', 'p.supplier', 'w.id as wishlist_id')
            ->join('products as p', 'w.id_product', '=', 'p.id')
            ->join('users as u', 'w.username', '=', 'u.username')
            ->where('w.username', '=', auth()->user()->username)
            ->get();

        $user = DB::table('users')->where('username', auth()->user()->username)->first();

        return view('wishlist/show', [
            'products' => $products,
            'user' => $user
        ]);
    }

    public function destroy(int $id) {
        DB::table('wishlists')->where('id', $id)->delete();
        return redirect('/wishlist/show');
    }
}