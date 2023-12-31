<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('buku', [Controller::class, 'getAllBooks']);
Route::get('users', [Controller::class, 'getAllUser']);
Route::post('upload', [Controller::class,'uploadBooks']);
Route::delete('delete', [Controller::class,'deleteBooks']);
