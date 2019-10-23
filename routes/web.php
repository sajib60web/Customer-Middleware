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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('/add_cart', 'WelcomeController@addToCart');
Route::get('/cart', 'WelcomeController@cart');

Route::get('/demo', 'WelcomeController@demo');
Route::post('/demo-save', 'WelcomeController@demoSave');
Route::get('/demo-edit/{id}', 'WelcomeController@demoEdit');
Route::post('/demo-update', 'WelcomeController@demoUpdate');


Route::get('/student', 'StudentController@index');
Route::get('/add-student', 'StudentController@addStudent');
Route::post('/student-save', 'StudentController@studentSave');
Route::get('/edit-student/{id}', 'StudentController@editStudent');
Route::post('/student-update', 'StudentController@updateStudent');

Route::get('/classRoutine', 'StudentController@classRoutine');

Route::get('/insert-update', 'StudentController@insertUpdate');
Route::post('/insert-update-insert', 'StudentController@insertUpdateInsert');
Route::post('/insert-update-update', 'StudentController@insertUpdateUpdate');

Route::prefix('customer')->group(function () {
    Route::get('customer/login', 'CustomerController@login');
});


// Customer Routes.
Route::get('/customer/login', 'CustomerController@showLoginForm')->name('customer.login.show');
Route::post('/customer/login', 'CustomerController@Login')->name('customer.login');
Route::post('/customer/register', 'CustomerController@customerRegister')->name('customer.register');
Route::get('/customer/password/reset', 'CustomerController@customerPasswordReset')->name('customer.password.reset');
Route::post('/customer/password/reset/sand', 'CustomerController@customerPasswordResetSand')->name('customer.password.reset.sand');
Route::get('/customer/new/password/{email_verified_token}', 'CustomerController@customerNewPassword')->name('customer.new.password');
Route::post('/customer/password/reset/new', 'CustomerController@customerPasswordResetNew')->name('customer.password.reset.new');
Route::get('/customer/logout', 'CustomerController@customerLogout')->name('customer.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
