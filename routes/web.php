<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeraldController;

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
    return redirect()->route('herald');
});

Route::controller(HeraldController::class)->group(function () {
    route::get('herald', [HeraldController::class, 'index'])->name('herald');

    route::post('send', [HeraldController::class, 'send'])->name('send');
    route::get('send', [HeraldController::class, 'send'])->name('send');
});
