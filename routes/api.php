<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

Route::post('/employee', [EmployeesController::class, 'post']);

Route::get('/employees', [EmployeesController::class, 'get']);
Route::get('/employee/{id}', [EmployeesController::class, 'getById']);

Route::put('/employee/{id}', [EmployeesController::class, 'put']);

Route::delete('/employee/{id}', [EmployeesController::class, 'delete']);

// Route::get('/employees', function () {
//     return response()->json([
//         "message" => "Get Method Success"
//     ]);
// });

// Route::post('/employee', function () {
//     return response()->json([
//         "message" => "Post Method Success"
//     ]);
// });

// Route::put('/employee/{id}', function ($id) {
//     return response()->json([
//         "message" => "Put Method Success " . $id
//     ]);
// });

// Route::delete('/product/{id}', function ($id) {
//     return response()->json([
//         "message" => "Delete Method Success " . $id
//     ]);
// });
