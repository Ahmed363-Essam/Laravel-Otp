<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TwoFactoryController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','two_factory'])->name('dashboard');


Route::get('verifyed',[TwoFactoryController::class ,'index'])->name('verifyed');

Route::post('verifyed/checkcode',[TwoFactoryController::class ,'store'])->name('verifyed.checkcode');

require __DIR__.'/auth.php';
