<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FrontendController;
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
/*******************connexion**********************/
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/ajout', function () {
   return view('ajout');
})->name('ajout');
/**************************contact********************************/
Route::post('footer', [ContactsController::class, 'store'])->name('store');

Route::get('footer', [ContactsController::class, 'create'])->name('footer.create');

