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



Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@requestRegister');
Route::get('/signup/update', 'Auth\RegisterController@update');
Route::get('/', 'Auth\LoginController@login');
Route::post('/', 'Auth\LoginController@requestLogin');

Route::get('/ticket', 'Tickets\TicketsViewController@viewRequest');
Route::get('/ticket-add', 'Tickets\TicketsAddController@add');
Route::post('/ticket-add', 'Tickets\TicketsAddController@requestAdd');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
