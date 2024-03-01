<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin', function () {
    return view('/admin');
})->middleware(['auth', 'verified'])->name('admin');
Route::get('/guichet', function () {
    return view('guichet');
})->middleware(['auth', 'verified'])->name('guichet');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin/addguichetier',[\App\Http\Controllers\GuichetierController::class,'createGuichet'])->name('addguichetier');
    Route::get('/admin/listeCompte',[\App\Http\Controllers\CompteAController::class,'index'])->name('listeCompte');
});

require __DIR__.'/auth.php';
