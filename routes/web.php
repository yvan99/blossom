<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CouncellorController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('homepage');
Route::view('/signup','signup');
Route::get('/signup',[StudentController::class,'GenerateUsername']);
Route::post('/signup',[StudentController::class,'CreateStudent'])->name('savestudent');

Route::view('/signin','student.login');
Route::post('/signin',[AuthController::class,'studentLogin'])->name('studentlogin');


// ADMINISTRATOR ROUTES
Route::view('/admin','admin.login');
Route::post('/admin',[AuthController::class,'adminLogin'])->name('adminlogin');

Route::group(['middleware' => 'auth:admin','prefix'=>'admin'],function (){
Route::view('/home','admin.index')->name('homeadmin');
Route::view('/counselor','admin.counselor');
Route::post('/counselor',[CouncellorController::class,'CreateCouncellor'])->name('savecounsellor');
Route::view('/student','admin.student');
Route::post('/question',[QuestionsController::class,'CreateQuestion'])->name('savequestion');
Route::view('/question','admin.question');
Route::get('/logout',[AuthController::class,'Adminlogout']);
});


  Route::view('/quiz','quiz')->name('homestudent');
  Route::get('/quiz',[QuestionsController::class,'getRandomQuestions']);


// COUNCELLOR ROUTES
Route::view('/counsellor','counselor.login');
