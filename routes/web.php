<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/voli', [PageController::class, 'list'])->name('list');
Route::get('/voli/dettagli/{id}', [PageController::class, 'show'])->name('show');


Route::get('/contattaci', [PageController::class, 'contact'])->name('contact');
Route::post('/contattaci/invia', [PageController::class, 'send'])->name('send');







