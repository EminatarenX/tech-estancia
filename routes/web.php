<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MatesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Public
Route::get('/', [AppController::class, 'index'])->name('home');
Route::get("/productos", [AppController::class, 'catalog'])->name('catalog');
// end services

Route::get('/dashboard/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/dashboard/team/{user:id}', [TeamController::class, 'user'])->name('team.user');
Route::get('/dashboard/team-create', [MatesController::class, 'index'])->name('team.create');

Route::get('/dashboard/products-create', [ProductController::class,  'index'])->name('products.create');
Route::post('/dashboard/products-create', [ProductController::class, 'store'])->name('products.store');
Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
Route::delete('/dashboard/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/dashboard/products', [ProductController::class, 'show'])->name('products.index');
Route::get('/dashboard/products/{product:id}', [ProductController::class, 'view'])->name('products.view');
// Route::get('/dashboard/team/create', [MatesController::class, 'index'])->name('team.create');  
//no se porque con el path de tres no servia y con el de dos si
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
