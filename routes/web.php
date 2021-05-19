<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ListAdminController;

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



Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/admin/user',[UserController::class,'view'])->name('viewuser');
Route::get('/admin/job',[JobController::class,'view'])->name('viewjob');
Route::get('/admin/admin',[ListAdminController::class,'view'])->name('viewadmin');