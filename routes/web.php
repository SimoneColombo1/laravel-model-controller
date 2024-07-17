<?php
use App\Http\Controllers\Guest\PageController as GuestPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MovieController as MovieController;
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

Route::get('/',[GuestPageController::class,'index'])->name('guest.home');

Route::get('/movies',[MovieController::class,'index'])->name('guest.movies.index');