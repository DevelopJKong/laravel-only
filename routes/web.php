<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;


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

Route::get('/',[AuthController::class,'index'])->name('auth.index');
Route::get('/success',[AuthController::class,'success'])->name('auth.success');
Route::get("/signup",[AuthController::class,'signup'])->name('auth.signup');
Route::get("/login",[AuthController::class,'showLogin'])->name('auth.showLogin');
Route::get("/logout",[AuthController::class,'logout'])->name('auth.logout');
Route::post('/register',[AuthController::class,'register'])->name('auth.register');
Route::post('/login',[AuthController::class,'login'])->name('auth.login');

Route::resource('posts',PostsController::class);
