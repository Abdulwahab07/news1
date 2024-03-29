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
/*
Route::get('/control_panel', function () {
    return view('new_temp.temp_index');
});
*/

Route::get('/control_panel', 'PanelController@index')->name('c_panel.index');
Route::post('/customer', 'CustomerController@store')->name('customer.store');
Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/user_registration', 'Auth\RegisterController@index')->name('auth.register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function (){
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
