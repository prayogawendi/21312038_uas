<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

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

Route::get('/biodata', [BiodataController::class,'index']);
Route::get('/biodata/create', [BiodataController::class,'create']);
Route::post('/biodata', [BiodataController::class,'store']);

Route::get('/biodata/{biodata_id}/edit', [BiodataController::class,'edit']);
Route::put('/biodata/{biodata_id}', [BiodataController::class,'update']);
Route::delete('/biodata/{biodata_id}', [BiodataController::class,'destroy']);
