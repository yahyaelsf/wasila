<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('cms/')->middleware('guest:admin')->group(function () {
    Route::get('login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
    Route::post('login', [AuthController::class, 'adminLogin']);
});
Route::prefix('cms/')->middleware('auth:admin')->group(function () {
    Route::get('home',function(){return view('cms.parent');});
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('admins', AdminController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('users', UserController::class);
});
Route::prefix('front/')->middleware('guest:web')->group(function () {
    Route::get('login', [AuthController::class, 'showUserLogin'])->name('user.login');
    Route::post('login', [AuthController::class, 'userLogin']);
});
Route::prefix('front/')->middleware('auth:web')->group(function(){
    Route::get('products', [FrontController::class, 'showProducts'])->name('products');
    Route::get('chefs', [FrontController::class, 'showChefs'])->name('chefs');
    Route::get('chef-profile', [FrontController::class, 'chefProfile'])->name('chef.profile');
    Route::get('card', [FrontController::class, 'card'])->name('card');
    Route::get('favorite', [FrontController::class, 'favorite'])->name('favorite');
    Route::get('user-profile', [FrontController::class, 'userProfile'])->name('user.profile');
});

// Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/home', [FrontController::class, 'index'])->name('index');
Route::get('/login', [FrontController::class, 'showLogin'])->name('login');
Route::get('/register', [FrontController::class, 'showRegister'])->name('register');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
