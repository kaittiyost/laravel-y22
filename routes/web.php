<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
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
Route::middleware('CheckUser')->group(function(){
    Route::get('/', [UserController::class,'index']);
    Route::post('/search', [UserController::class,'index']);
    Route::get('/game', [GameController::class,'index']);
    Route::get('/game/create', [GameController::class,'create']);
    Route::post('/game/upload', [GameController::class,'upload']);
    Route::get('/game/play/{slug}', [GameController::class,'play']);
});

Route::get('/login', [UserController::class,'loginForm']);
Route::get('/logout', [UserController::class,'logout']);

Route::post('/checkuser', [UserController::class,'checkUser']);

