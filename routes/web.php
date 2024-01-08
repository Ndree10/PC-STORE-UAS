<?php

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemsController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::controller(ItemsController::class)->prefix('items')->group(function () {
        Route::get('', 'index')->name('items');
        Route::get('create', 'create')->name('items.create');
        Route::post('store', 'store')->name('items.store');
        Route::get('show/{id}', 'show')->name('items.show');
        Route::get('edit/{id}', 'edit')->name('items.edit');
        Route::put('edit/{id}', 'update')->name('items.update');
        Route::delete('destroy/{id}', 'destroy')->name('items.destroy');
});

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('', 'index')->name('users');
    Route::get('create', 'create')->name('user.create');
    Route::post('store', 'store')->name('user.store');
    Route::get('show/{id}', 'show')->name('user.show');
    Route::get('edit/{id}', 'edit')->name('user.edit');
    Route::put('edit/{id}', 'update')->name('user.update');
    Route::delete('destroy/{id}', 'destroy')->name('user.destroy');
});

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
    Route::get('', 'index')->name('transaksi');
    Route::get('create', 'create')->name('transaksi.create');
    Route::post('store', 'store')->name('transaksi.store');
    Route::get('edit/{id}', 'edit')->name('transaksi.edit');
    Route::put('edit/{id}', 'update')->name('transaksi.update');
    Route::delete('destroy/{id}', 'destroy')->name('transaksi.destroy');

});