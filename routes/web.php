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
    return view('index');
});

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@create',
]);


Route::get('/register',function(){
   return view('register');
});

Route::post('myAjaxCallURI',array('uses'=>'UserRegistration@postRegister'));
Route::post('myCallURI',array('uses'=>'UserRegistration@postPayment'));
Route::post('AjaxCallURI',array('uses'=>'UserRegistration@mailvalid'));
Route::get('download', 'CountryController@download');


