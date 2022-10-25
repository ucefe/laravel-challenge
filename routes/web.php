<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);

Route::get('/create', [ContactController::class, 'create']);

Route::post('/contacts', [ContactController::class, 'store']);

//Because we don't work with DB and don't have Ids in .ser so will delete by index
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);