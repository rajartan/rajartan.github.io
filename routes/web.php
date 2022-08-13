<?php

use App\Http\Controllers\AdminTutorialController;
use App\Http\Controllers\DashboardController;
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


Route::get('/tutorial', [TutorialController::class, 'index']);

// Admin Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/tutorial', [AdminTutorialController::class, 'index']);
