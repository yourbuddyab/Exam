<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('/exam.admin.admin');
    
});

Route::resource('exam', 'ExamController');
Route::resource('student', 'StudentController');
Route::resource('/', 'ExaminationController');// for main page
Route::resource('answer', 'AnswerController');
Route::post('/check/answer', 'AnswerController@examCheck');

Route::get('/notication/{id}', 'ExaminationController@notication');
Route::post('/notication', 'ExaminationController@startExam');

// Route::post('exam','ExamController@store');

// Route::get('exam/create','ExamController@create');

// Route::resource('/student', 'StudentController');

// Route::get('exam/1','ExamController@update')->name('exam.show');

// Route::patch('exam/{exam}','ExamController@show');

Route::post('/score-card', 'ExamController@scorecard');

// Route::post('/start', 'ExamController@addstudent');

// Route::post('/start', 'ExamController@sessioname');


//chat
Route::get('/home', 'ChatController@index');
Route::post('/message', 'ChatController@store');


Route::get('/converstion', 'ChatController@show'); 

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/examinationclass', 'ExaminationClassController');