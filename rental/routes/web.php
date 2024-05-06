<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('auth');

Route::get('/admin/cars/create', [CarController::class, 'create'])->name('cars.create');

Route::post('/admin/cars/create', [CarController::class, 'store'])->name('cars.store');

Route::get('/admin/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/admin/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::delete('/admin/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');


Route::get('/rentals', [RentalController::class, 'index'])->name('rental.index');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create');
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');
Route::get('/rentals/{rental}/edit', [RentalController::class, 'edit'])->name('rentals.edit');
Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('rentals.update');
Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('rentals.destroy');
