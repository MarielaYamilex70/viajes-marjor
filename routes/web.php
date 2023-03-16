<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FotoController;
// use App\Http\Controllers\Admin\HomeController;
// use App\Http\Controllers\Admin\FileController;

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
    //return view('welcome');
    return view('fotos.index');
});

Auth::routes();

/* Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::resource('/admin/files', 'Admin\FileController')->names('admin.files'); */

Route::resource('fotos', FotoController::class); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
