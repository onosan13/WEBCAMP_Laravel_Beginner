<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;


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

/*
Route::get('/',[\App\Http\Controllers\WelcomeController::class, 'index']);
*/

//タスク管理システム
Route::get('/welcome',[WelcomeController::class, 'index']);
Route::get('/task/list',[TaskController::class, 'list']);


//テスト用
Route::get('/welcome/second',[WelcomeController::class, 'second']);
Route::get('/',[AuthController::class, 'index']);