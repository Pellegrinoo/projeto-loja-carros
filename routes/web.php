<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/index',
     [IndexController::class, 'getCarros']
)->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::controller(IndexController::class)->group(function () {
    Route::get('/index', 'getCarros')->name('dashboard');
    Route::get('/index/hatch', 'getHatch')->name('carros.hatch');
    Route::get('/index/sedan', 'getSedan')->name('carros.sedan');
    Route::get('/carro/info/{id}', 'info')->name('carros.info');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
