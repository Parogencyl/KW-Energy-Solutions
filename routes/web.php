<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/galeria', function () {
    return view('gallery');
});

Route::post('/sendEmail', [App\Http\Controllers\EmailController::class, 'send']);

Route::get('/admin', function() {
    return view('auth/login');
});

Route::get('/admin/zarzadzanie', function() {
    return view('admin');
});

Route::post('/delete', [App\Http\Controllers\AdminController::class, 'delete']);
Route::post('/add', [App\Http\Controllers\AdminController::class, 'add']);
