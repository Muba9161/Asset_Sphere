<?php

use App\Http\Controllers\Web\BasicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoaderController;

Route::get('/', [BasicController::class, 'home']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('loaders', [LoaderController::class, 'index'])->name('loaders.index');
    Route::get('loaders/create', [LoaderController::class, 'create'])->name('loaders.create');
    Route::post('loaders', [LoaderController::class, 'store'])->name('loaders.store');
    Route::get('loaders/{id}', [LoaderController::class, 'show'])->name('loaders.show');
    Route::put('loaders/{id}', [LoaderController::class, 'edit'])->name('loaders.edit');
    Route::delete('loaders/{id}', [LoaderController::class, 'destroy'])->name('loaders.destroy');
    // Route::delete('loaders/{id}', [LoaderController::class, 'destroy'])->name('admin.loaders.destroy');

});
