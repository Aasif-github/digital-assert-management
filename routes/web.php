<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/', [HomeController::class, 'index'])->name('client.home');

// Route::get('/', [HomeController::class, 'index'])->name('home');

