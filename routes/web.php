<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('profile', function () {
//     return view('profile');
// });


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
//     Route::get('/cart', [CartController::class, 'greeting'])->name('cart');
//     Route::get('/order', [CartController::class, 'greeting'])->name('order');
//     Route::get('/user', [CartController::class, 'greeting'])->name('user');
// });

# parent
Route::group(['prefix' => 'dashboard'], function () {
    # Child
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/cart', [CartController::class, 'greeting'])->name('cart');
        Route::get('/order', [CartController::class, 'greeting'])->name('order');
        Route::get('/user', [CartController::class, 'greeting'])->name('user');
        Route::get('users', [UsersController::class, 'show'])->name('users');
    });
});
