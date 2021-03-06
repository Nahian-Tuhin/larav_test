<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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
Route::get('/add', [DataController::class, 'add'])->name('add');
Route::post('/add', [DataController::class, 'add_data'])->name('add_data');
Route::get('/show', [DataController::class, 'show'])->name('show');
