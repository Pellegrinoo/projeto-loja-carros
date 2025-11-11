<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\admin\CrudController;
use App\Http\Controllers\EditCarroController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/index',
     [IndexController::class, 'getCarros']
)->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'getCarros')->name('dashboard');
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



Route::middleware('auth')->group(function () {
    Route::get('/admin', [CrudController::class, 'crudInicial'])->name('admin');
    Route::get('/admin/modelo', [CrudController::class, 'filtraModelo'])->name('filtraModelo');
    Route::get('/admin/edit/{id}', [EditCarroController::class, 'infoCarroEdit'])->name('admin.infoEdit');
    Route::post('/admin/edit', [EditCarroController::class, 'editarCarro'])->name('admin.editarCarro');
    Route::post('/admin/excluir/{id}', [EditCarroController::class, 'excluirCarro'])->name('admin.excluirCarro');
    Route::get('/admin/cadastrar', function () {return view('admin.cadastrarCarro');})->name('admin.viewCadastrar');
    Route::post('/admin/cadastrar', [EditCarroController::class, 'cadastrarCarro'])->name('admin.cadastrarCarro');
    
});








require __DIR__.'/auth.php';
