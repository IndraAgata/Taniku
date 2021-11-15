<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'main']);

Route::get('/catalog/{username}', [CatalogController::class, 'main']);

Route::get('/cart/show', [CartController::class, 'show']);
Route::get('/cart/store/{id}', [CartController::class, 'store']);
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy']);

Route::get('/wishlist/show', [WishlistController::class, 'show']);
Route::get('/wishlist/store/{id}', [WishlistController::class, 'store']);
Route::get('/wishlist/destroy/{id}', [WishlistController::class, 'destroy']);

Route::get('/user/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/user/register', [UserController::class, 'store']);
Route::get('/user/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/user/login', [UserController::class, 'authenticate']);
Route::post('/user/logout', [UserController::class, 'logout']);

Route::get('/product/create'  , [ProductController::class, 'create'])->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/show' , [ProductController::class, 'show'])->middleware('auth');
Route::get('/product/edit/{id}' , [ProductController::class, 'edit'])->middleware('auth');
Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy']);
