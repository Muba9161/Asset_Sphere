<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoaderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckAuthStatus;
use App\Http\Middleware\Manager;
use App\Http\Middleware\Member;
use Illuminate\Support\Facades\Route;

// Guest routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.submit.login');
});

// Authenticated admin routes
Route::middleware([CheckAuthStatus::class])->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');

    // User management routes
    Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {

        // Admin routes
        Route::middleware(Admin::class)->group(function () {
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::put('status', 'status')->name('status');
            Route::get('/{id}', 'destroy')->name('destroy');
        });

        // Manager routes
        Route::middleware(Manager::class)->group(function () {
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

        // Member routes
        Route::middleware(Member::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });
    });

    // Profile routes
    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {

        // Member routes
        Route::middleware(Member::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
            Route::post('update', 'updateProfile')->name('update');
            Route::post('update-password', 'updatePassword')->name('update.password');
        });
    });

    // Route::prefix('loader')->name('loader.')->controller(ProfileController::class)->group(function () {

    //     // Admin routes
    //     Route::middleware(Member::class)->group(function () {
    //         Route::get('create', 'create')->name('create');
    //         Route::post('store', 'store')->name('store');
    //         Route::put('status', 'status')->name('status');
    //         Route::get('/{id}', 'destroy')->name('destroy');
    //         // Route::post('update', 'updateProfile')->name('update');
    //         // Route::post('update-password', 'updatePassword')->name('update.password');
    //     });
    // });

    // Route::name('loaders.')
    //     ->prefix('loaders')
    //     ->middleware('admin')
    //     ->controller(LoaderController::class)->group(function () {
    //         Route::get('/{id}', 'destroy')->name('destroy');
    //         Route::put('status', 'status')->name('status');
    //         Route::put('create', 'create')->name('create');
    //     });

    // Route::name('loaders.')
    //     ->prefix('loaders')
    //     ->middleware('manager')
    //     ->controller(LoaderController::class)->group(function () {
    //         Route::post('store', 'store')->name('store');
    //         Route::get('edit/{id}', 'edit')->name('edit');
    //         Route::put('update/{id}', 'update')->name('update');
    //     });
});


// Route::name('users.')
//     ->prefix('users')
//     ->controller(UsersController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('blocked', 'index')->name('blocked');
//         Route::get('deleted', 'index')->name('deleted');
//         Route::post('store', 'store')->name('store');
//         Route::get('edit/{id}', "edit")->name('edit');
//         Route::delete('/{id}', 'destroy')->name('destroy');
//         Route::post('update', 'update')->name('update');
//         Route::put('status', 'status')->name('status');
//         Route::get('view/{id}', 'showUser')->name('show');
//     });
