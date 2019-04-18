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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


//Route::get('datatables', 'UserController@anyData')->name('datatables.anyData');

Route::resource('ajaxproducts','UserController');
Route::resource('subjects','SubjectController');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('home');

    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'UserController@indexview');

        Route::get('/{id}/edit', 'CategoriesController@edit')->where('id', '[0-9]+');
        Route::get('/{id}', 'CategoriesController@show')->where('id', '[0-9]+');
        Route::delete('/{id}', 'CategoriesController@destroy')->where('id', '[0-9]+');
        Route::put('/{id}', 'CategoriesController@update')->where('id', '[0-9]+');
        Route::post('/create', 'CategoriesController@store');

    });

    Route::group(['prefix' => 'category'], function () {
        Route::group(['prefix' => 'subject'], function () {
            Route::get('', 'SubjectController@indexview');
    
            Route::get('/{id}/edit', 'SubjectController@edit')->where('id', '[0-9]+');
            Route::get('/{id}', 'SubjectController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'SubjectController@destroy')->where('id', '[0-9]+');
            Route::put('/{id}', 'SubjectController@update')->where('id', '[0-9]+');
            Route::post('/create', 'SubjectController@store');
        });
    });

});