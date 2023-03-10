<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskListController;

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

Route::get('/', [TaskListController::class, 'index']);


Route::post('/saveTaskRoute', [TaskListController::class, 'saveTask'])->name('saveTask');

Route::post('/finishedMarkRoute/{id}', [TaskListController::class, 'finishedMark'])->name('finishedMark');

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
