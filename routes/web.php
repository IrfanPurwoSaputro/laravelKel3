<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/booking', [HomeController::class, 'booking']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/charts', [PageController::class, 'charts']);

Route::get('/admin/documentation', [PageController::class, 'documentation']);

Route::get('/admin/basic_elements', [PageController::class, 'basic_elements']);

Route::get('/admin/mdi', [PageController::class, 'mdi']);

Route::get('/admin/error_404', [PageController::class, 'error_404']);

Route::get('/admin/error_500', [PageController::class, 'error_500']);

Route::get('/admin/login', [PageController::class, 'login']);

Route::get('/admin/register', [PageController::class, 'register']);

Route::get('/admin/basic_table', [PageController::class, 'basic_table']);

Route::get('/admin/buttons', [PageController::class, 'buttons']);

Route::get('/admin/dropdowns', [PageController::class, 'dropdowns']);

Route::get('/admin/typhography', [PageController::class, 'typhography']);

