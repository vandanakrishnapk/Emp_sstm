<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/adminlogin','HomeController@adminlogin')->name('adminlogin');
Route::get('/HRlogin','HomeController@HRlogin')->name('HRlogin');
Route::get('/employeelogin','HomeController@employeelogin')->name('employeelogin');


Route::post('/dologin','HomeController@dologin')->name('dologin');
Route::post('/hrdologin','HomeController@hrdologin')->name('hrdologin');
Route::post('/empdologin','HomeController@empdologin')->name('empdologin');

Route::get('/admindashboard','HomeController@admindashboard')->name('admindashboard');
Route::get('/HRdashboard','HomeController@HRdashboard')->name('HRdashboard');
Route::get('/addemp', 'HomeController@addemp')->name('addemp');
Route::post('/empsave','HomeController@empsave')->name('empsave');
Route::get('/viewemp','HomeController@viewemp')->name('viewemp');
Route::get('/employeedashboard','HomeController@employeedashboard')->name('employeedashboard');

Route::get('/logout','HomeController@logout')->name('dologout');
Route::get('/hrlogout','HomeController@hrlogout')->name('hrlogout');
Route::get('/emplogout','HomeController@emplogout')->name('emplogout');





