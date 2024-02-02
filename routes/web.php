<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\ExampleController;

enum Category: string
{
    case Fruits = 'fruits';
    case People = 'people';
}
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

Route::view('/', 'home');

Route::get('/categories/{category}', function (Category $category) {
    return $category->value;
});

// Route::get('mydata', [ExampleController::class, 'my_data']);
// Route::post('receive', [ExampleController::class, 'receive'])->name('receive');

// Route::controller(ExampleController::class)->group(function () {
//     Route::get('mydata', 'my_data');
//     Route::post('receive', 'receive')->name('receive');
// });


// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/my/data', fn () => view('my_data'));
// Route::post('/receive/data/{id}', fn () => 'Done')->name('receive');


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

// Route::get('item/edit/{id}', function ($id = null) {
//     return 'Edit Record Id = ' . $id;
// });


// Route::prefix('products')->group(function () {
//     Route::get('/show', fn () => 'Show Product');
//     Route::get('/create', fn () => 'Create Product');
//     Route::get('/delete', fn () => 'Delete Product');
// });


// Route::group(['prefix' => 'products'], function () {
//     Route::get('/show', fn () => 'Show Product');
//     Route::get('/create', fn () => 'Create Product');
//     Route::get('/delete', fn () => 'Delete Product');
// });

// Route::fallback(fn () => redirect('/'));