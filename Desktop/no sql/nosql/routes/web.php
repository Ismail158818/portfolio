<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(LibraryController::class)->group(function () {
    Route::get('/', 'Browse_Items')->name('home');
    Route::get('library', 'Browse_Items')->name('library.index');
    Route::get('download-item/{item}', 'Download_Item')->name('library.download');
});

Route::view('developers', 'developers')->name('developers');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [LibraryController::class, 'Browse_Items'])->name('dashboard');

    Route::controller(LibraryController::class)->group(function () {
        Route::post('save-item', 'Save_Item')->name('library.store');
        Route::delete('delete-item/{item}', 'Delete_Item')->name('library.destroy');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('admin-users', 'index')->name('admin.users');
        Route::post('admin-save-user', 'Save_User')->name('admin.users.store');
        Route::post('admin-assign-uploader/{user}', 'assignUploader')->name('admin.users.assign-uploader');
        Route::post('admin-assign-reader/{user}', 'assignReader')->name('admin.users.assign-reader');
        Route::delete('admin-delete-user/{user}', 'destroy')->name('admin.users.destroy');
    });
});

require __DIR__.'/auth.php';
