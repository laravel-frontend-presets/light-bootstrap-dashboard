<?php
use Carbon\Traits\Rounding;

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
    return response()->view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
    Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    Route::patch('profile/password', 'ProfileController@password')->name('profile.password');

    Route::resource('user', 'UserController', ['except' => ['show']]);

    Route::get('{page}', 'PageController@index')->name('page.index');
});
