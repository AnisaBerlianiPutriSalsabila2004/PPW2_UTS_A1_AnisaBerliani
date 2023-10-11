<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pemain', [pemain_controller::class, 'index']);
Route::get('/pemain/create', [pemain_controller::class, 'create'])->name('pemain.create');
Route::post('/pemain', [pemain_controller::class, 'store'])->name('pemain.store');

Route::post('/pemain/delete/{id}', [pemain_controller::class, 'destroy'])->name('pemain.destroy');


Route::get('/pemain/edit/{id}', [pemain_controller::class, 'edit'])->name('pemain.edit');
Route::post('/pemain/edit/data/{id}', [pemain_controller::class, 'update'])->name('pemain.update');
