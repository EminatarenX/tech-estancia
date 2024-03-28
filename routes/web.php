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

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/dashboard/team/{user:id}', [TeamController::class, 'user'])->name('team.user');
Route::get('/dashboard/team-create', [MatesController::class, 'index'])->name('team.create');
Route::get('/dashboard/products-create', [ProductController::class,  'index'])->name('products.create');
// Route::get('/dashboard/team/create', [MatesController::class, 'index'])->name('team.create');  
//no se porque con el path de tres no servia y con el de dos si
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
