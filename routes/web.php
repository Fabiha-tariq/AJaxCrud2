<?php

use App\Http\Controllers\DataController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataController::class, 'index']);
Route::post('/add-data', [DataController::class, 'addData'])->name('add-data');
Route::post('/update-data', [DataController::class, 'updateData'])->name('update-data');
Route::post('/delete-data', [DataController::class, 'deleteData'])->name('delete-data');

