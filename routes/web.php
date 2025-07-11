<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyRegisterController;
Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('properties')->name('properties.')->controller(PropertyController::class)->group(function () {
//     Route::get('/', 'index')->name('index');           // properties.index
//     Route::get('{id}', 'show')->name('show');          // properties.show
//     Route::post('/', 'store')->name('store');          // properties.store
//     Route::put('{id}', 'update')->name('update');      // properties.update
//     Route::delete('{id}', 'destroy')->name('destroy'); // properties.destroy
// });

Route::prefix('admin/properties')->name('admin.properties.')->controller(PropertyController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
    Route::get('/{id}', 'show')->name('show');
});

Route::view('/bookings', 'bookings.index')->name('bookings.index');
Route::prefix('user/properties')->name('user.properties.')->controller(PropertyRegisterController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
    // show booking form
    Route::get('/booking/{id}', 'create')->name('create');
    // form Submission
    Route::post('/booking/{id}', 'bookViewing')->name('book');
});