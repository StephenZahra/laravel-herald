<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HeraldPage;

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

route::get('herald', HeraldPage::class)->name('herald');

//Route::controller(HeraldController::class)->group(function () {
//
//
//    route::any('send', [HeraldController::class, 'send'])->name('send');
//});
