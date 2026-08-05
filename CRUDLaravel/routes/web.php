<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class, 'home']);

Route::get('/', [StudentsController::class, 'display']); 
 

Route::get('/sort/name', [StudentsController:: class, 'firstSort']);

Route::get('/filter/name', [StudentsController:: class, 'filter']);

Route::get('/student/add', [StudentsController:: class, 'add']);

Route::post('/student/create', [StudentsController::class, 'create']);

Route::get('/student/edit/{id}', [StudentsController::class, 'edit']);

Route::put('/student/edit/{id}', [StudentsController::class, 'update']);

Route::delete('/student/delete/{id}', [StudentsController::class, 'delete']);

Route::get('/student/view/{id}', [StudentsController::class, 'view']);