<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\LoginController;

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

//Route::get('/', function () {
   //return view('index');
//});

Route::get('/',[FrontendController::class,'index'])->name('ACCEUIL');
Route::get('/apropos',[FrontendController::class,'apropos'])->name('APROPOS') ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/admin',[App\Http\Controllers\Admin\LoginController::class,'showLoginForm'])->name('admin.login');
//Route::post('admin',[App\Http\Controllers\Admin\LoginController::class,'login']);
//Route::get('admin/home',[App\Http\Controllers\AdminController::class,'index'])->name('home');


Route::get('/ajout', function () {
   return view('ajout');
})->name('ajout');
