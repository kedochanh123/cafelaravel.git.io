<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController as LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["middleware" => "api"], function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/home', [\App\Http\Controllers\CafeController::class, 'index']);
    Route::post('/addCafe', [\App\Http\Controllers\CafeController::class, 'addCafe'])->name('home.addCafe');
    Route::post('/editCafe', [\App\Http\Controllers\CafeController::class, 'editCafe'])->name('home.editCafe');
    Route::post('/deleteCafe', [\App\Http\Controllers\CafeController::class, 'deleteCafe'])->name('home.deleteCafe');
    Route::post('/register', [\App\Http\Controllers\AccountController::class, 'createAccount'])->name('user.register');
});
