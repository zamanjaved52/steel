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
//URL::forceScheme('https');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('contact',[App\Http\Controllers\HomeController::class,'contact']);
Route::get('services',[App\Http\Controllers\HomeController::class,'service']);
Route::get('about',[App\Http\Controllers\HomeController::class,'about']);

Route::get('team',[App\Http\Controllers\TeamController::class,'index']);
