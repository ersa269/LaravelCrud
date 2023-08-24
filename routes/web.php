<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

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
    return view('welcome');
});
Route::get('create',[CreateController::class,'create'])->name('create');
Route::post('store',[CreateController::class,'store'])->name('store');
Route::get('show',[CreateController::class,'show'])->name('show');
Route::get('edit/{id}',[CreateController::class,'edit'])->name('edit');
Route::post('update{id}',[CreateController::class,'update'])->name('update');
Route::get('delete/{id}',[CreateController::class,'delete'])->name('delete');

