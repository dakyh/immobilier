<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\TypeACController;
use App\Http\Controllers\TypeBienController;
use App\Http\Controllers\AccompagnementsController;
use App\Http\Controllers\WelcomeController;



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




Route::get('/', [WelcomeController::class, 'index'])->name('welcome');



// Auth::routes();
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Routes nécessitant une connexion
Route::middleware(['auth'])->group(function () {
    Route::get('biens/gestion', [BiensController::class, 'gestion'])->name('biens.gestion');
    Route::resource('typebiens', TypeBienController::class);
    Route::resource('biens', BiensController::class)->except(['show','index']); // Exclure 'show' car déjà défini
    Route::resource('images', ImagesController::class);
    Route::resource('accompagnements', AccompagnementsController::class);
    Route::resource('typeacs', TypeACController::class);
});
Route::get('/biens', [BiensController::class, 'index'])->name('biens.index');
Route::get('/biens/{bien}', [BiensController::class, 'show'])->name('biens.show');