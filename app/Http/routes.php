<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'uses'=>'UserController@index',
    'as'=>'index'
]);
Route::get('/hotel-details',[
    'uses'=>'UserController@hotelDetails',
    'as'=>'hoteldetails'
]);

Route::get('/search',[
    'uses'=>'UserController@searchResult',
    'as'=>'search'
]);

Route::get('/login',[
    'uses'=>'UserController@loginInterface',
    'as'=>'login',
    'middleware'=>'guest'
]);
Route::post('/login',[
    'uses'=>'UserController@login',
    'as'=>'login'
]);
Route::get('/logout',[
    'uses'=>'UserController@logout',
    'as'=>'logout'
]);

Route::get('/registration',[
    'uses'=>'UserController@regInterface',
    'as'=>'reg'
]);

Route::post('/registration',[
    'uses'=>'UserController@reg',
    'as'=>'reg'
]);
Route::get('/dashboard',[
    'uses'=>'UserController@dashboard',
    'as'=>'dashboard',
    'middleware'=>'auth'
]);
Route::get('/dashboard/add-employee',[
    'uses'=>'UserController@addEmployeeInterface',
    'as'=>'addEmp',
    'middleware'=>'auth'
]);
Route::post('/dashboard/add-employee',[
    'uses'=>'UserController@addEmployee',
    'as'=>'addEmp',
    'middleware'=>'auth'
]);
Route::get('/dashboard/list-employee',[
    'uses'=>'UserController@listEmployeeInterface',
    'as'=>'listEmp',
    'middleware'=>'auth'
]);
Route::post('/dashboard/list-employee',[
    'uses'=>'UserController@listEmployee',
    'as'=>'listEmp',
    'middleware'=>'auth'
]);

Route::get('/addroom',[
    'uses'=>'HotelController@addRoomInterface',
    'as'=>'addRoom',
    'middleware'=>'auth'
]);

Route::post('/addroom',[
    'uses'=>'HotelController@addRoom',
    'as'=>'addRoom',
    'middleware'=>'auth'
]);
Route::get('/listroom',[
    'uses'=>'HotelController@listRoom',
    'as'=>'listRoom',
    'middleware'=>'auth'
]);
Route::get('/roomrequest',[
    'uses'=>'HotelController@roomRequest',
    'as'=>'roomRequest',
    'middleware'=>'auth'
]);
Route::get('/booking',[
    'uses'=>'HotelController@bookrooms',
    'as'=>'bookRoom',
    'middleware'=>'auth'
]);
Route::get('/success',[
    'uses'=>'HotelController@successMsg',
    'as'=>'success.msg',
    'middleware'=>'auth'
]);

Route::get('/history',[
    'uses'=>'VisitorController@history',
    'as'=>'history'
]);
Route::get('/experience',[
    'uses'=>'VisitorController@experience',
    'as'=>'experience'
]);
Route::post('/share-experience',[
    'uses'=>'VisitorController@shareExperience',
    'as'=>'share.experience'
]);



