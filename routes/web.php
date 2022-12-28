<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationDatabaseController;

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

Route::get('/index',[RelationDatabaseController::class,'index'])->name('index');
Route::get('/create',[RelationDatabaseController::class,'create'])->name('create');
Route::get('/destroy/{id}',[RelationDatabaseController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[RelationDatabaseController::class,'edit'])->name('edit');
Route::post('/update/{id}',[RelationDatabaseController::class,'update'])->name('update');
Route::post('/store',[RelationDatabaseController::class,'store'])->name('store');
Route::get('/projects',[RelationDatabaseController::class,'projects'])->name('projects');
Route::get('/numberproject/{company_id}',[RelationDatabaseController::class,'numberprojects'])->name('numberprojects');
