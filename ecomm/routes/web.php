<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Filter;

use App\Models\Product;
use App\Models\Category;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});
Route::view('filterview','filterview');
Route::view('categoryfilter','categoryfilter');
Route::view('create/createproduct','create/createproduct');
Route::view('create/createcategory','create/createcategory');
Route::view('home', 'home');
Route::view('login', 'login');
Route::view('filterviews/vendorview', 'filterviews/vendorview');
Route::view('createcategory','/create/createcategory');
Route::view('/register', 'register');
Route::post("/login", [App\Http\Controllers\UserController::class, 'login']);
Route::get("product", [App\Http\Controllers\ProductController::class, 'index']);
Route::get("productview/{id}",[App\Http\Controllers\ProductController::class, 'pview']);
Route::post('createcategory', [App\Http\Controllers\CategoryController::class, 'save']);
Route::post('/submit', [App\Http\Controllers\ProductController::class, 'save']);




Route::get('create/createcategory',[App\Http\Controllers\CategoryController::class, 'create']);
Route::get('header', [App\Http\Controllers\CategoryController::class, 'list']);
Route::get('create/createproduct',[App\Http\Controllers\CategoryController::class, 'createproduct']);
Route::post("add_to_cart", [App\Http\Controllers\ProductController::class, 'addToCart']);
Route::get("cartlist", [App\Http\Controllers\ProductController::class, 'cartlist']);
Route::get("removecart/{id}", [App\Http\Controllers\ProductController::class, 'removeCart']);
Route::get("ordernow", [App\Http\Controllers\ProductController::class, 'orderNow']);
Route::post("orderplace", [App\Http\Controllers\ProductController::class, 'orderPlace']);
Route::get("myorders", [App\Http\Controllers\ProductController::class, 'myOrders']);
Route::post("/register", [App\Http\Controllers\UserController::class, 'registers']);
Route::get("categoryfilter/{id}", [App\Http\Controllers\Filter::class, 'catFilter']);
Route::get("filterview", [App\Http\Controllers\Filter::class, 'display']);
Route::get("/filterviews/vendorview", [App\Http\Controllers\UserController::class, 'authenticate']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
