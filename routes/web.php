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
    return view('welcome');
});


Route::any('/loom_show', [App\Http\Controllers\LoomController::class, 'show'])->name('show');
Route::any('/loom_submit', [App\Http\Controllers\LoomController::class, 'store'])->name('store');
Route::any('/loom_create', [App\Http\Controllers\LoomController::class, 'create'])->name('create');
Route::any('/loom_edit/{id}', [App\Http\Controllers\LoomController::class, 'edit'])->name('edit');
Route::any('/loom_update', [App\Http\Controllers\LoomController::class, 'update'])->name('update');




