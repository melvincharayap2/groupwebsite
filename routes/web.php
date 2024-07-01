<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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
Route::get('/', function() {
    return view('home');
});

Route::get('/home', function() {
    return view('home');
});
Route::get('/menu', function() {
    return view('menu');
});
Route::get('/booktable', function() {
    return view('booktable');
});
Route::get('/about', function() {
    return view('about');
});




// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// Route::get('/booktable', [BookTableController::class, 'index'])->name('booktable');
