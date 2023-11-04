<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\List_todo_controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/todo', [List_todo_controller::class, 'getAllToDo']);
Route::post('/todo', [List_todo_controller::class, 'postToDo']);
Route::delete('/todo', [List_todo_controller::class, 'deleteToDo']);
Route::put('/todo', [List_todo_controller::class, 'putToDo']);
