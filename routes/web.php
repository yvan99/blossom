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
Route::post('/signin',[AuthController::class,'studentLogin'])->name('logstud');


// ADMINISTRATOR ROUTES
Route::view('/admin','admin.login');
Route::post('/admin',[AuthController::class,'adminLogin'])->name('adminlogin');

Route::group(['middleware' => 'auth:student','prefix'=>'student'],function (){
  Route::view('/student','student.active');
  Route::view('/quiz','student.quiz');
  Route::get('/my-quiz',[StudentController::class,'getStudentAttempt']);
  Route::get('/quiz',[QuestionsController::class,'getRandomQuestions'])->name('homestudent');
  Route::post('/quiz',[QuestionsController::class,'attemptQuiz'])->name('quiztake');
  Route::get('/logout',[AuthController::class,'studentLogout']);
  Route::get('/success',[StudentController::class,'saveStudentAnswers'])->name('successsurvey');
  Route::view('/success','student.success')->name('successsurvey');
  Route::view('/learnmore','student.learnmore');


Route::group(['middleware' => 'auth:admin'],function (){
Route::view('/home','admin.index')->name('homeadmin');
Route::view('/counselor','admin.counselor');
Route::post('/counselor',[CouncellorController::class,'CreateCouncellor'])->name('savecounsellor');
Route::view('/student','admin.student');
Route::post('/question',[QuestionsController::class,'CreateQuestion'])->name('savequestion');
Route::view('/question','admin.question');
Route::view('/quiz/{id}','admin.studquizes');
Route::get('/quiz/{id}',[StudentController::class,'getStudentQuiz']);
Route::get('/admin/logout',[AuthController::class,'Adminlogout']);
});


  
