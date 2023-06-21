<?php

use App\Http\Controllers\ClientController;
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

Route::get('/',[ClientController::class,'index']);
Route::post('/reservation',[ClientController::class,'reservation'])->name('reservation');
Route::post('/contact',[ClientController::class,'contact'])->name('contact');
Route::post('/',[ClientController::class,'abonne'])->name('abonne');



/* Route::get('/', function () {
    return view('welcome');
}); */
