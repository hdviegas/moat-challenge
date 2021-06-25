<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

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
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('auth');
});

Route::prefix('register')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.register');
    Route::post('/', [UserController::class, 'insert'])->name('user.register');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', [ArtistController::class, 'index'])->name('index');
    
    Route::prefix('artist/{artist}/albums')->group(function () {
        Route::get('edit/{id}', [AlbumController::class, 'edit'])->name('album.edit.view');
        Route::get('create', [AlbumController::class, 'create'])->name('album.create.view');
        Route::get('/', [AlbumController::class, 'index'])->name('albums');
    });

    Route::prefix('album')->group(function () {
        Route::post('/', [AlbumController::class, 'insert'])->name('album.insert');
        Route::put('/', [AlbumController::class, 'update'])->name('album.update');
        Route::delete('/', [AlbumController::class, 'delete'])->name('album.delete');
    });

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
