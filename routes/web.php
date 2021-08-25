<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/delivery', 'App\Http\Controllers\DeliveryController@index')->name('delivery');

Route::get('/repair', 'App\Http\Controllers\RepairController@index')->name('repair');

Route::get('/category/{category}', 'App\Http\Controllers\ProductController@showCategory')->name('showCategory');


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home')->middleware('auth');

/*
 * Admin panel
 */
Route::middleware(['auth', 'role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});
