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
Route::get('/', 'JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Jobs Profile
Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');//dikasih nama job.show sehingga mudah memanggilnya.

// Company Profile
Route::get('/company/{id}/{company}', 'CompanyController@index')->name('company.index');
Route::get('/company/create', 'CompanyController@create'); // untuk employer
Route::post('/company/store', 'CompanyController@store')->name('company.store');
Route::post('/company/coverphoto', 'CompanyController@coverphoto')->name('company.coverphoto');
Route::post('/company/logo', 'CompanyController@logo')->name('company.logo');

// User Profile
Route::get('/user/profile', 'UserProfileController@index');
Route::post('/profile/store', 'UserProfileController@store')->name('profile.store');
Route::post('/profile/coverletter', 'UserProfileController@coverletter')->name('profile.coverletter');
Route::post('/profile/resume', 'UserProfileController@resume')->name('profile.resume');
Route::post('/profile/avatar', 'UserProfileController@avatar')->name('profile.avatar');

// Employer Profile
Route::view('/employer/profile', 'auth.emp-register')->name('employer.registration');
Route::post('/employer/profile/store', 'EmployerProfileController@store')->name('employer.store');




