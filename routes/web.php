<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\classifiedController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NoteController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});


Route::resource('/category', CategoryController::class);

Route::resource('/levels', LevelController::class);

Route::resource('/cities', cityController::class);

Route::resource('/classifieds', classifiedController::class);

Route::resource('/locations', LocationsController::class);

Route::resource('/subjects', SubjectController::class);

Route::resource('/modes', ModeController::class);

Route::resource('/students',StudentController::class);

Route::resource('/notes',NoteController::class);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');


