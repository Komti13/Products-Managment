<?php

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

/*-----------------------Admin Route-------------*/
Route::prefix('admin')->group(function (){
    Route::get('/dashboard',[\App\Http\Controllers\AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('auth','role:admin');
    Route::get('/logout',[\App\Http\Controllers\AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('auth','role:admin') ;
});

/*-----------------------End Admin Route-------------*/

/*-----------------------User Route-------------*/
Route::prefix('user')->group(function (){
//    Route::get('/dashboard',[\App\Http\Controllers\AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('auth','role:admin');
    Route::get('/logout',[\App\Http\Controllers\HomeController::class, 'Logout'])->name('user.logout')->middleware('auth','role:user') ;
});

/*-----------------------End User Route-------------*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'Index'])->middleware(['auth', 'role:user|admin'])->name('dashboard');



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'role:user|admin'])->name('dashboard');

require __DIR__.'/auth.php';
