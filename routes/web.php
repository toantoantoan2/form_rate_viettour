<?php
use App\Http\Controllers\FormRateController;
use App\Http\Controllers\FormAdminController;
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

Route::get('/', function () {
    return view('form');
});

Route::prefix('client-form')->name('form-rate.')->group(function () {
    Route::get('/form', [FormRateController::class, 'index'])->name('index');
    //Nhập Form
    Route::post('/nhap-form', [FormRateController::class, 'create'])->name('create');
});

Route::prefix('admin')->name('manage.')->group(function () {
    Route::get('/list-form', [FormAdminController::class, 'index'])->name('list-form');
    Route::get('/form-details/{advice}', [FormAdminController::class, 'show'])->name('form-details');
    Route::get('/rate-chart', [FormAdminController::class, 'chart'])->name('rate-chart');
    Route::get('/search-form', [FormAdminController::class, 'search'])->name('search-form');
    Route::get('/filter-rate-by-date', [FormAdminController::class, 'filterRateByDate'])->name('filter-rate-by-date');
});


