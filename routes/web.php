<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::post('/create-event',[EventController::class, 'createEvent']);
Route::get('/edit-event/{event}', [EventController::class, 'edit']);
Route::put('/edit-event/{event}', [EventController::class, 'update']);
Route::get('/delete-event/{event}', [EventController::class, 'delete']);