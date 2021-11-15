<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function main() {
        $products = DB::table('products')->get();

        return view('home/main', [
            'products' => $products
        ]);
    }
}