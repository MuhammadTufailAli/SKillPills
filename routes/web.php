<?php

use Illuminate\Support\Facades\Route;

Session();

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

Route::view('/', 'home');

Route::get('/Howitworks', 'App\Http\Controllers\visitorController@gotohowitworks');
Route::get('/contactus', 'App\Http\Controllers\visitorController@gotocontactus');

Route::get('/Signup', 'App\Http\Controllers\visitorController@gotosignup');
Route::get('/courses', 'App\Http\Controllers\visitorController@gotocourses');
Route::get('/news', 'App\Http\Controllers\visitorController@gotonews');
Route::get('/home', 'App\Http\Controllers\visitorController@gotohome');
Route::get('/profile', 'App\Http\Controllers\studentController@gotoprofile');
Route::get('/userinterface', 'App\Http\Controllers\studentController@gotouserinterface');

Route::get('/exercises', 'App\Http\Controllers\studentController@gotoexercises');
Route::get('/quizzes', 'App\Http\Controllers\studentController@gotoquizzes');
Route::get('/notes', 'App\Http\Controllers\studentController@gotonotes');
Route::get('/addnote', 'App\Http\Controllers\studentController@gotoaddnote');
Route::get('/Results', 'App\Http\Controllers\studentController@gotoResults');

Route::get('/newsevents', 'App\Http\Controllers\studentController@gotonewsevents');

Route::post('/Signup', 'App\Http\Controllers\visitorController@gotosignupdatabase');

Route::get('/signin', 'App\Http\Controllers\visitorController@gotosignin');

Route::post('/signin', 'App\Http\Controllers\studentController@check');

Route::get('/changepassword', 'App\Http\Controllers\studentController@gotochangepassword');
Route::post('/changepassword', 'App\Http\Controllers\studentController@gotochangepasswordupdate');
Route::get('/deleteaccount', 'App\Http\Controllers\studentController@gotodeleteaccount');
Route::post('/deleteaccount', 'App\Http\Controllers\studentController@gotodeletingaccount');

Route::post('/profile', 'App\Http\Controllers\studentController@gotostudentdatabase');


Route::post('/userinterface', 'App\Http\Controllers\studentController@gotocourse');
Route::get('/coursevideos', 'App\Http\Controllers\studentController@gotocoursevideos');
Route::get('/noticeboard', 'App\Http\Controllers\studentController@gotonoticeboard');
Route::get('/quiz', 'App\Http\Controllers\studentController@gotoquiz');
Route::get('/discussion', 'App\Http\Controllers\studentController@gotodiscussion');
Route::get('/result', 'App\Http\Controllers\studentController@gotoresult');
Route::get('/progress', 'App\Http\Controllers\studentController@gotoprogress');
Route::get('/successstory', 'App\Http\Controllers\studentController@gotosucessstory');
Route::get('/onlinesupport', 'App\Http\Controllers\studentController@gotoonlinesupport');


Route::get('/signout', function () {
    Session()->forget('user');
    return view("signin");
});
