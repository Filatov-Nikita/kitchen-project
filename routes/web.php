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
})->name('main-page');

Route::group(['prefix' => '/kitchen'], function () {
    Route::get('/', 'MainController@viewKitchen');
    Route::get('/{id}', 'MainController@getKitchenById')->name('kitchenById');
});
Route::get('mebels/{id}', 'MainController@mainMenu')->name('mebels');
Route::get('/login', 'AuthController@getLoginPage')->name('login');
Route::post('/login', 'AuthController@loginAuth');
Route::get('/sort-providers/{id_provider}', 'MainController@sort')->name('sortBrand');
Route::get('/admin', 'AdminController@test');
Route::get('/admin/create', 'AdminController@createObjView');
Route::post('/admin/create', 'AdminController@createObjPost');
Route::get('/registration', 'AuthController@registartionView')->name('registration');
Route::post('/registration', 'AuthController@registartionPost');
Route::get('/sql', 'AuthController@makeSql');
Route::get('/logout', 'AuthController@logout')->name('logout');