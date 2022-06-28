<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('/signup','signup');
Route::get('/signup',[StudentController::class,'GenerateUsername']);
Route::post('/signup',[StudentController::class,'CreateStudent'])->name('savestudent');

// ADMINISTRATOR ROUTES
Route::view('/admin','admin.login');
// COUNCELLOR ROUTES
Route::view('/counsellor','counselor.login');
