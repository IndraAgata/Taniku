<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function main(String $username) {
        $products = DB::table('products')->where('supplier', $username)->get();
        $user = DB::table('users')->where('username', $username)->first();

        return view('catalog/main', [
            'products' => $products,
            'user' => $user
        ]);
    }
}