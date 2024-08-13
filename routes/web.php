<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/home', 'welcome');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('contact', [ContactController::class, 'index'])->name('contact');




/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->group(function() {

  Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
  Route::resource('users', UserController::class);

});

