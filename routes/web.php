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
    return view('auth.login');
});

Route::get('privacy-policy', 'HomeController@privacy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('getSubCategory', 'AccountController@get_sub_category');
Route::resource('accoutant', 'AccountController');
Route::resource('banker', 'BankerController');
Route::resource('insurance', 'InsuranceController');
Route::get('edit-profile', 'HomeController@edit_profile');
Route::get('about-us', 'HomeController@about_us');
Route::post('profile_update','HomeController@profile_update');

Route::get('image/{slug}', [
    'as'         => 'images.show',
    'uses'       => 'HomeController@displayImage',
]);
