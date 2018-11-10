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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', "DashboardController@getDashboard");
Route::post('/changeSkin', "DashboardController@changeSkin");
Route::post('/sortDash', "DashboardController@sortDash");
Route::post('/usersBirthday', "DashboardController@usersBirthday");
Route::post('/news/edit','NewsController@editNew');
Route::post('/news/delete','NewsController@deleteNew');
Route::post('/news/create','NewsController@createNew');

//View Images
Route::get('/doc/{document}','Classes\DocumentViewController@image_view');

//profile
Route::resource('/profile','Staff\ProfileController');
Route::post('/profile/changeImage','Staff\ProfileController@changeImage');

//Directory
Route::get('/directory/{dir}','RH\DirectoryController@user_directory');


Route::get('/reset_password','Auth\ResetPasswordController@reset_password');

// Usuarios
Route::resource('/users','TI\UsersController');
Route::post('/users/store','TI\UsersController@store');
Route::get('/users','TI\UsersController@getUsers');
Route::get('/user/new','TI\UsersController@newUser');

// Requests
Route::resource('/requests','TI\RequestsController');
Route::post('/request/updateStatus','TI\RequestsController@updateStatus');
Route::get('/request/user','TI\RequestsController@userRequest');
Route::post('/request/getObservations','TI\RequestsController@getObservations');
Route::post('/request/putObservations','TI\RequestsController@putObservations');
Route::get('/requests','TI\RequestsController@getRequests');

//Calendar
Route::get('/calendar','CalendarController@getCalendar');
Route::post('/calendar/addEvent','CalendarController@addEvent');
Route::post('/calendar/putEvent','CalendarController@putEvent');
Route::post('/calendar/editEvent','CalendarController@editEvent');
Route::post('/calendar/editDatetimeEvent','CalendarController@editDatetimeEvent');

//Staff
Route::get('/staff/induction','Staff\StaffInductionController@show');

//Mails
Route::resource('/emails','TI\EmailsController');
Route::get('/emails','TI\EmailsController@getEmails');

//Manager Content
Route::get('/manager_content','Classes\DocumentViewController@manage_view');
Route::post('/manager_content/edit','Classes\DocumentViewController@manage_content');

// Areas
Route::resource('/areas','TI\AreasController');
Route::post('/areas/store','TI\AreasController@store');
Route::get('/areas','TI\AreasController@getAreas');
Route::get('/area/new',function(){
    return view("TI.new_area");
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/youtube',array('uses' => 'YoutubeController@index', 'as' => 'youtube'));
Route::post('/youtube',array('uses' => 'YoutubeController@search', 'as' => 'youtube.search'));

