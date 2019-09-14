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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/en', function () {
    return view('en_home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);
Route::post('admin-logout', ['as'=>'admin-logout','uses'=>'Auth\AdminLoginController@logout1']);
Route::resource('languages', 'LanguagesController');
Route::resource('products', 'ProductsController');
Route::resource('admins', 'AdminsController');
Route::resource('users', 'UsersController');
Route::post('/languagefilter', 'HomeController@languageFilter');

Route::get('email-test', function(){
  
	$details['email'] = 'ahmedyassiniti@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('done');
});
