<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkillController;
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


Route::match(['get', 'post'], '/', [HomeController::class, 'home'])->name('app_home');

Route::get('/about', [HomeController::class, 'about'])->name('app_about');

Route::get('/test', [HomeController::class, 'test'])->name('app_test');

Route::get('/skilltree', [SkillController::class, 'skilltree'])->name('app_skilltree');

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'] )->name('login');
Route::match(['get', 'post'], '/register', [LoginController::class, 'register'] )->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


