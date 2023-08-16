<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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


Route::get('/',[CrudController::class, 'index']);
Route::post('/',[CrudController::class, 'create']);
Route::get('/update/{id}',[CrudController::class, 'onUpdate']);
Route::post('/update/{id}',[CrudController::class, 'update']);
Route::get('/delete/{id}',[CrudController::class, 'delete']);
