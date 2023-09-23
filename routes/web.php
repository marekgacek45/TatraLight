<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/o-nas', [PagesController::class,'about'])->name('about');
Route::get('/oferta', [PagesController::class,'offer'])->name('offer');
Route::get('/galeria', [PagesController::class,'gallery'])->name('gallery');
Route::get('/kontakt', [PagesController::class,'contact'])->name('contact');


