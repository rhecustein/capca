<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapcaController;


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

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('capca.index');
    });

    Route::prefix('capca')->name('capca.')->group(function() {
        Route::get('list', [CapcaController::class, 'index'])->name('index');
        Route::get('hasil', [CapcaController::class, 'hasil'])->name('hasil');
        Route::get('presentase', [CapcaController::class, 'presentase'])->name('presentase');
    });
});

require __DIR__.'/auth.php';

