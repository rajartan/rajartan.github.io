<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminTutorialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TutorialController;
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

// home
Route::get('/', [HomeController::class, 'index']);

// Tutorial
Route::get('/tutorials', [TutorialController::class, 'index']);

// Category
Route::get('categories/{category:slug}', [CategoryController::class, 'show']);

// Admin Dashboard
    Route::get('/admin/dashboard/', [AdminDashboardController::class, 'index']);

//
Route::get('/admin/tutorial', [AdminTutorialController::class, 'index']);

// Profile
Route::resource('/admin/profile', AdminProfileController::class);
