<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\frontsiteController;
use App\Http\Controllers\learning;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AuthController;
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

// Route::get('qb', [learning::class, 'qb']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'do_register'])->name('do_register');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [dashboardController::class, 'showindex'])
        ->name('dashboard');

    Route::resource('/users', UserController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/post', PostController::class);
});


// Route::get('/orm', [postController::class, 'orm']);
// Route::get('/relations', [postController::class, 'relations']);


Route::get('/', [frontsiteController::class, 'showhome'])
    ->name('frontsite.index');

Route::get('/blog', [frontsiteController::class, 'showblog'])
    ->name('frontsite.blog');

Route::get('/single/{id}', [frontsiteController::class, 'showsingle'])
    ->name('frontsite.single');

Route::get('/contact', [frontsiteController::class, 'showcontact'])
    ->name('frontsite.contact');
