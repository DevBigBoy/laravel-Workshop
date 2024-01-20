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

Route::post('user', function () {
    return 'hello';
});

Route::put('post', function () {
    return 'hello PUT Method';
});

Route::patch('slider', function () {
    return 'hello patch Method';
});

Route::delete('order', function () {
    return 'hello delete Method';
});

Route::any('order', function () {
    return 'hello any Method';
});