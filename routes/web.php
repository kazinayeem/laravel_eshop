<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
//Route::get('/api/postgroup', [PostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/product-details', function () {
    return view('product');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard/addproduct', function () {
    return view('allproduct');
});

Route::get('/dashboard/showallproduct', function () {
    return view('showallproduct');
});

Route::get('/dashboard/addgroup', function () {
    return view('addgroup');
});