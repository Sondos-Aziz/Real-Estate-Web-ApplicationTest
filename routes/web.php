<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web','admin']],function(){
    // @datatable
    // Route::get('/Adminpanel/users/data' ,['as ' =>'Adminpanel.users.data' , 'uses' =>'UsersController@anyData']);
    // Route::get('/Adminpanel/bu/data' ,['as ' =>'Adminpanel.bu.data' , 'uses' =>'BuController@anyData']);

    // @admin
    Route::get('/Adminpanel','AdminController@index');

    // @users
    Route::resource('/Adminpanel/users','UsersController');

    //@SiteSetting
    Route::get('/Adminpanel/sitesetting', 'SiteSettingController@index');
    Route::post('/Adminpanel/sitesetting', 'SiteSettingController@store');

    // @building
    Route::resource('/Adminpanel/bu','BuController');
    Route::get('/Adminpanel/bu/{id}/delete', 'BuController@destroy');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/ShowAllBullding' , 'BuController@showAllEnabel');
Route::get('/ForRent' , 'BuController@ForRent');
Route::get('/ForBuy' , 'BuController@ForBuy');
Route::get('/type/{type}' , 'BuController@showByType');

Route::post('/search', 'BuController@search');


Route::get('/home', 'HomeController@index')->name('home');

