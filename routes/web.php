<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/index', function () {
    return view('welcome');
});

Route::put('/05', function () {
    return view('welcome');
});
Route::delete('/test', function () {
    return response()->json(['message' => 'delete']);
});

Route::get('/category/index', [CategoryController::class, 'index']);
