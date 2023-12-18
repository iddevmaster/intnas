<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    Auth::logout();
    return view('welcome');
});

// Landing page
Route::view('/', 'landing_page');
Route::view('/home', 'landing_page');
Route::view('/activity', 'portfolio');
Route::view('/contacts', 'contacts');
Route::view('/products', 'products');
Route::view('/blogs', 'blogs');
Route::get('/product/{prod_id}/detail', function ($prod_id) {
    return view('product_detail', ['prod_id' => $prod_id]);
});
Route::get('/blog/{blog_id}/detail', function ($prod_id) {
    return view('blog_detail', ['blog_id' => $prod_id]);
});
Route::view('/services', 'services');

// Backend
Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->middleware('verified') // Specific middleware for this route
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');

    Route::view('/main', 'backend.main');

});

require __DIR__.'/auth.php';
