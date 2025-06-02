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

/*
Route::get('/', function () {
    return view('auth.login');
});
*/

Route::get('/', 'InvestmentController@main');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/viewall', 'PasswordController@viewall');

//Route::get('/sri', 'InvestmentController@index');

//Route::redirect('/test2', '/test?jumpToPage=3');

//Route::get('/work', 'InvestmentController@work');

Route::get('/register2/', 'RegistrationController@index')->name('register2');

Route::get('/test/', 'InvestmentController@index');

Route::get('/users/', 'PasswordController@index');



//redirect route
Route::get('/main/', 'InvestmentController@main');

Route::get('/changepassword','PasswordController@changePassword')->name('changePassword');
Route::post('/changepassword','PasswordController@setPassword')->name('changePassword');
//actual route
//Route::get('/main2/{page}', 'InvestmentController@main2')->name('main2');

Route::get('/main2/', 'InvestmentController@main2')->middleware(['password','auth'])->name('main2');



Route::get('/backend/', 'AdminController@backend');


Route::get('/backend2/', 'AdminController@backend2')->middleware('auth')->name('backend2');