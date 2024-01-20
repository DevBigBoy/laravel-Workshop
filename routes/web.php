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
    return view('home');
});

// Route::post('user', function () {
//     return 'hello';
// });

// Route::put('post', function () {
//     return 'hello PUT Method';
// });

// Route::patch('slider', function () {
//     return 'hello patch Method';
// });

// Route::delete('order', function () {
//     return 'hello delete Method';
// });

// Route::any('order', function () {
//     return 'hello any Method';
// });

// Route::options('product', function () {
//     return 'welcome to options';
// });

// Route::match(['get', 'post'], 'item', function () {
//     return 'welcome to Items';
// });

// Route::get('user/edit/{id}', function ($id) {
//     return 'Edit Record Id = ' . $id;
// });

// Route::get('item/edit/{id?}', function (int $id = null) {
//     return 'Edit Record Id = ' . $id;
// });

/**ً with regular ex */
// Route::get('item/edit/{id}', function ($id = null) {
//     return 'Edit Record Id = ' . $id;
// })->where(['id' => '[0-9]+']);


// Route::get('item/edit/{id}', function ($id = null) {
//     return 'Edit Record Id = ' . $id;
// })->whereNumber('id');

// Route::get('item/edit/{name}', function ($name = null) {
//     return 'user\'s name is ' . $name;
// })->whereAlpha('name');

// Route::get('item/edit/{name}', function ($name = null) {
//     return 'user\'s name is ' . $name;
// })->whereAlphaNumeric('name');

Route::get('item/edit/{id}', function ($id = null) {
    return 'Edit Record Id = ' . $id;
});