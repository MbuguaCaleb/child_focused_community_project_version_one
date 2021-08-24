<?php

use App\Http\Controllers\HouseHoldDetailsController;
use App\Http\Controllers\HouseHoldController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//HouseHold Routes
Route::prefix('/household')->group(function () {
    Route::get('/index', [HouseHoldController::class, 'index'])->name('household-index');
    Route::get('/create', [HouseHoldController::class, 'create'])->name('household-create');
    Route::POST('/store', [HouseHoldController::class, 'store'])->name('household-store');
});


//HouseHold Routes
Route::prefix('/household/details')->group(function () {
    Route::get('/index/{house_id}', [HouseHoldDetailsController::class, 'index'])->name('household-details-index');
    Route::get('/create/{house_id}', [HouseHoldDetailsController::class, 'create'])->name('household-details-create');
    Route::POST('/store', [HouseHoldDetailsController::class, 'store'])->name('household-details-store');
});
