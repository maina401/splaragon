<?php

use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Application;
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

Route::middleware(['splade'])->group(function () {
    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return redirect()->route('login');
       /* return view('welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);*/
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::view('/services', 'services.index')->name('services');
        Route::view('/quotes', 'quotes.index')->name('quotes');
        Route::view('/entities', 'entities.index')->name('entities');
        Route::view('/entities/buyers', 'entities.buyers.index')->name('entities.buyers');
        Route::view('/entities/vendors', 'entities.vendors.index')->name('entities.vendors');
        Route::view('/entities/providers', 'entities.providers.index')->name('entities.providers');
        Route::view('/entities/suppliers', 'entities.suppliers.index')->name('entities.suppliers');
        //commodities
        Route::view('/entities/commodities', 'entities.commodities.index')->name('entities.commodities');
        Route::view('/entities/commodities/categories', 'entities.commodities.categories.index')->name('entities.commodities.categories');

        Route::view('/invoices', 'invoices.index')->name('invoices');
        Route::view('/orders', 'orders.index')->name('orders');

        Route::get('/entities/users', [UsersController::class,'index'])->name('entities.users');
        Route::get('/entities/users/{uuid}', [UsersController::class,'show'])->name('entities.users.show');

    });
});
