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

Route::get('/', function () {
    return view('frontend.newexam');
});

Route::get('/baihoc', function () {
    return view('frontend.lesson');
});
Route::get('bai-hoc/{slug}I{id}.html', 'LessonController@index')->name('lesson');

Route::get('bai-thi/{slug}I{id}.html','ExamController@index')->name('exam.index');
Route::post('bai-thi/saveanswer','ExamController@saveAnswer')->name('exam.save');
Route::post('bai-thi/destroy','ExamController@deleteExam')->name('exam.destroy');
Route::post('bai-thi/calculatepoint','ExamController@calculatePoint')->name('exam.calculate');
Route::get('bai-thi/ket-qua/ket-qua-thi-{id}.html','ExamController@resultExam')->name('exam.result');
Route::get('bai-thi/xem-lai-{id}.html','ExamController@reviewExam')->name('exam.review');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


Route::group(['prefix' => 'admin'], function () {
    Route::resource('genders', 'Manage\GenderController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('permissions', 'Manage\PermissionController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('grades', 'Manage\GradeController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('subjects', 'Manage\SubjectController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'Manage\UsersController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('chapters', 'Manage\ChapterController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('lessons', 'Manage\LessonController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('levelQuestions', 'Manage\LevelQuestionController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('exams', 'Manage\ExamController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('examDetails', 'Manage\ExamDetailController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('questions', 'Manage\QuestionController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('resultTests', 'Manage\ResultTestController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('resultTestDetails', 'Manage\ResultTestDetailController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('levelQuestions', 'Manage\LevelQuestionController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('examDetails', 'Manage\ExamDetailController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('resultTests', 'Manage\ResultTestController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('resultTestDetails', 'Manage\ResultTestDetailController', ["as" => 'admin']);
});
