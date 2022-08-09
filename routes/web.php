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
Route::get('/delete_emp/{id}','HomeController@delete_emp')->name('delete_emp');

Route::get('edit_emp/{id}','HomeController@edit_emp')->name('edit_emp');
Route::post('/update_emp','HomeController@update_emp')->name('update_emp');


Route::get('/logout','HomeController@logout')->name('dologout');
Route::get('/hrlogout','HomeController@hrlogout')->name('hrlogout');
Route::get('/emplogout','HomeController@emplogout')->name('emplogout');

Route::get('/addsal','HomeController@addsal')->name('addsal');
Route::post('/salsave','HomeController@salsave')->name('salsave');
Route::get('/viewsal','HomeController@viewsal')->name('viewsal');
Route::get('/viewempsal','HomeController@viewempsal')->name('viewempsal');
Route::get('/viewsaladmin','HomeController@viewsaladmin')->name('viewsaladmin');
Route::get('/editsal/{id}','HomeController@editsal')->name('editsal');
Route::post('/updatesal','HomeController@updatesal')->name('updatesal');
Route::get('/deletesal/{id}','HomeController@deletesal')->name('deletesal');


Route::get('editprofile/{id}','HomeController@editpro')->name('editpro');
Route::post('/updatepro','HomeController@updatepro')->name('updatepro');
Route::get('/viewpro','HomeController@viewpro')->name('viewpro');


Route::get('/emprequestleave','HomeController@emp_req')->name('emp_req');
Route::post('/saveempleave','HomeController@saveleave')->name('saveleave');
Route::get('/viewleaveemployee','HomeController@viewleave')->name('viewleave');

Route::get('/addworksheet','HomeController@addworksheet')->name('addworksheet');
Route::post('/saveworksheet','HomeController@saveworksheet')->name('saveworksheet');
Route::get('/viewwork','HomeController@viewwork')->name('viewwork');

Route::get('/givework','HomeController@givework')->name('givework');
Route::post('/savework','HomeController@savework')->name('savework');






