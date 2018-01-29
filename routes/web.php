<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|creative-gh-pages.user.subscriber
*/

Route::get('/', function () {
  //App\Admin::create(['email'=>'a@a.a','password'=>bcrypt('111111'),'name'=>'ibrahim']);
    return view('/creative-gh-pages.user.main'); 
});
/*-----users-----*/
Route::get('/home', 'HomeController@index')->name('home');//user main page.

Route::get('/course', 'CourseController@index')->name('course');

Route::get('/lesson/{couresid}', 'LessonController@index')->name('lesson.index');
Route::get('/lesson/create/{couresid}', 'LessonController@create')->name('lesson.create');
Route::post('/lesson/store', 'LessonController@store')->name('lesson.store');

Route::get('/lessoncontent/{lessonid}', 'LessoncontentController@index')->name('lessoncontent.index');
Route::get('/lessoncontent/create/{lessonid}', 'LessoncontentController@create')->name('lessoncontent.create');
Route::get('/lessoncontent/{lessoncontent}/edit', 'LessoncontentController@edit')->name('lessoncontent.edit');
Route::post('/lessoncontent/store', 'LessoncontentController@store')->name('lessoncontent.store');
Route::post('/lessoncontent/update', 'LessoncontentController@update')->name('lessoncontent.update');


Route::get('/exercise/{lessonid}', 'ExerciseController@index')->name('exercise.index');
Route::post('/exercise', 'ExerciseController@store')->name('exercise.store');
Route::get('/exercise/{exercise}/edit', 'ExerciseController@edit')->name('exercise.edit');
Route::post('/exercise/update', 'ExerciseController@update')->name('exercise.update');

Route::get('/point/{lessonid}', 'PointController@index')->name('point.index');

Route::get('/discussion/{lessonid}', 'DiscussionController@index')->name('discussion.index');
Route::get('/discussion/{discussion}/edit', 'DiscussionController@edit')->name('discussion.edit');
Route::post('/discussion/update', 'DiscussionController@update')->name('discussion.update');
Route::post('/discussion', 'DiscussionController@store')->name('discussion.store');


Route::post('/subscribe', 'CourseController@subscribe')->name('subscribe');

Route::get('/profile/{user_id}', 'ProfileController@index')->name('profile');
Route::post('/profile/store/avatar', 'ProfileController@storeAvatar')->name('storeAvatar');



Auth::routes();



Route::prefix('admin')->group(function(){
    Route::get('/course/add','CourseController@newCourse')->name('newcourse');
    Route::post('/course/add','CourseController@store')->name('postcourse');
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');   
});
