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
    return view('home');
});
Route::get('test', function (){
    return view('testupload');
});
Route::get('bai-hoc/{slug}I{id}.html', 'LessonController@index')->name('lesson');
Route::get('chuong-trinh/{grade?}/{subject?}', 'LessonController@showFullLesson')->name('lesson.full');

Route::get('de-thi/huong-dan-thi-{id?}.html','ExamController@preview')->name('exam.preview');
Route::get('de-thi/{grade?}/{subject?}','LessonController@showExamFull')->name('exam.full');
Route::get('bai-thi/{slug}I{id}.html','ExamController@index')->name('exam.index');
Route::post('bai-thi/saveanswer','ExamController@saveAnswer')->name('exam.save');
Route::post('bai-thi/destroy','ExamController@deleteExam')->name('exam.destroy');
Route::post('bai-thi/calculatepoint','ExamController@calculatePoint')->name('exam.calculate');
Route::get('bai-thi/ket-qua/ket-qua-thi-{id}.html','ExamController@resultExam')->name('exam.result');
Route::get('bai-thi/xem-lai-{id}.html','ExamController@reviewExam')->name('exam.review');

Route::get('xem-tai-lieu/{slug}I{id}.html', 'AssignmentController@index')->name('assignment');
Route::get('tai-lieu/{grade?}/{subject?}','AssignmentController@showAssignmentFull')->name('assignment.full');
Route::get('tap-tin/tai-tai-lieu-{id}.html','AssignmentController@download')->name('assignment.download')->middleware('auth');
Route::get('tap-tin/xem-tai-lieu-{id}.html','AssignmentController@viewonline')->name('assignment.viewonline')->middleware('auth');

Route::get('thong-tin-tai-khoan/thong-tin-ca-nhan.html', 'ProfileController@index')->name('profile.infoprofile');
Route::get('thong-tin-tai-khoan/lich-su-thi.html','ProfileController@showHistoryExam')->name('profile.history.exam');
Route::post('thong-tin-tai-khoan/cap-nhat-thong-tin','ProfileController@updateInfoProfile')->name('profile.update.info');
Route::post('thong-tin-tai-khoan/cap-nhat-mat-khau','ProfileController@updatePasswordProfile')->name('profile.update.password');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    Route::get('/', function (){
        return view('backend.index');
    })->name('admin.dashboard.index');
    Route::resource('genders', 'Manage\GenderController', ["as" => 'admin']);
    Route::resource('permissions', 'Manage\PermissionController', ["as" => 'admin']);
    Route::resource('grades', 'Manage\GradeController', ["as" => 'admin']);
    Route::resource('subjects', 'Manage\SubjectController', ["as" => 'admin']);
    Route::resource('users', 'Manage\UsersController', ["as" => 'admin']);
    Route::resource('chapters', 'Manage\ChapterController', ["as" => 'admin']);
    Route::resource('lessons', 'Manage\LessonController', ["as" => 'admin']);
    Route::resource('levelQuestions', 'Manage\LevelQuestionController', ["as" => 'admin']);
    Route::resource('exams', 'Manage\ExamController', ["as" => 'admin']);
    Route::resource('examDetails', 'Manage\ExamDetailController', ["as" => 'admin']);
    Route::resource('questions', 'Manage\QuestionController', ["as" => 'admin']);
    Route::resource('resultTests', 'Manage\ResultTestController', ["as" => 'admin']);
    Route::resource('resultTestDetails', 'Manage\ResultTestDetailController', ["as" => 'admin']);
    Route::resource('assignments', 'Manage\AssignmentController', ["as" => 'admin']);
    Route::get('question/import/importExcel','Manage\QuestionController@getImport')->name('admin.questions.importGet');
    Route::post('question/import','Manage\QuestionController@postImport')->name('admin.questions.importPost');
    Route::post('question/deleteMulti','Manage\QuestionController@deleteMulti')->name('admin.questions.deleteMulti');
});

