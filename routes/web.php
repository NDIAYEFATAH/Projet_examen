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

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['client', 'verified'])->name('welcome');


Route::get('/admin', function () {
    return view('/admin');
})->middleware('admin')->name('admin');



Route::get('/guichet', function () {
    return view('guichet');
})->middleware(['auth', 'verified'])->name('guichet');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['middleware' => 'client'], function (){
    Route::get('/client/createCompte', [\App\Http\Controllers\CompteController::class,'createCompte'])->name('createCompte');
    Route::post('/client/saveCompte', [\App\Http\Controllers\CompteController::class,'saveCompte'])->name('saveCompte');
    Route::get('/client/showCompte',[\App\Http\Controllers\CompteController::class,'showCompte'])->name('showCompte');
    //Route::get('/client/s')
    Route::post('/saveTransaction',[\App\Http\Controllers\TransactionController::class,'saveTransaction'])->name('saveTransaction');
    Route::get('/client/showCarte',[\App\Http\Controllers\CarteController::class,'showCarte'])->name('showCarte');
    });
Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin/addguichetier',[\App\Http\Controllers\GuichetierController::class,'createGuichet'])->name('addguichetier');
    Route::post('/admin/saveguichet',[\App\Http\Controllers\GuichetierController::class,'saveguichet'])->name('saveguichet');
    Route::get('/admin/addPack',[\App\Http\Controllers\PackController::class,'createPack'])->name('addPack');
    Route::post('/admin/savePack',[\App\Http\Controllers\PackController::class,'savePack'])->name('savePack');
    Route::get('/admin/listeCompte',[\App\Http\Controllers\CompteAController::class,'index'])->name('listeCompte');
    Route::post('/admin/bloquer/{object}',[\App\Http\Controllers\CompteAController::class,'bloquer'])->name('bloquer');
    Route::post('/admin/debloquer/{object}',[\App\Http\Controllers\CompteAController::class,'debloquer'])->name('debloquer');
    Route::get('/admin/dashadmin',[\App\Http\Controllers\TransactionController::class,'bilanTransaction'])->name('dashadmin');
});
Route::post('/saveDepot',[\App\Http\Controllers\TransactionController::class,'saveDepot'])->name('saveDepot');
Route::get('logout_admin',[\App\Http\Controllers\Auth\AuthenticatedSessionController::class,'logout_admin'])->name('logout_admin');

require __DIR__.'/auth.php';
