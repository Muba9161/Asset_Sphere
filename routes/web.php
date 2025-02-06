<?php

use App\Http\Controllers\Web\BasicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoaderController;
use App\Http\Controllers\Admin\PoetryController;

Route::get('/', [BasicController::class, 'home']);
Route::get('/loader', [BasicController::class, 'loader']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('loaders', [LoaderController::class, 'index'])->name('loaders.index');
    Route::get('loaders/create', [LoaderController::class, 'create'])->name('loaders.create');
    Route::post('loaders', [LoaderController::class, 'store'])->name('loaders.store');
    Route::get('loaders/{id}', [LoaderController::class, 'show'])->name('loaders.show');
    Route::put('loaders/{id}', [LoaderController::class, 'edit'])->name('loaders.edit');
    Route::delete('loaders/{id}', [LoaderController::class, 'destroy'])->name('loaders.destroy');
    // Route::delete('loaders/{id}', [LoaderController::class, 'destroy'])->name('admin.loaders.destroy');

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('poetrys', [PoetryController::class, 'index'])->name('poetrys.index');
    Route::get('poetrys/create', [PoetryController::class, 'create'])->name('poetrys.create');
    Route::post('poetrys', [PoetryController::class, 'store'])->name('poetrys.store');
    Route::get('poetrys/{id}', [PoetryController::class, 'show'])->name('poetrys.show');
    Route::put('poetrys/{id}', [PoetryController::class, 'edit'])->name('poetrys.edit');
    Route::delete('poetrys/{id}', [PoetryController::class, 'destroy'])->name('poetrys.destroy');
    // Route::delete('loaders/{id}', [LoaderController::class, 'destroy'])->name('admin.loaders.destroy');

});
