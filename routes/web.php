<?php

use App\Http\Controllers\BucketController;
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

Route::get('/',function (){return view('home');});
Route::resource('bucket',BucketController::class);
Route::get('images/{filename}', [ImageController::class, 'show'])->name('images.show');
