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

Auth::routes();

Route::get('/', 'PublicController@getHome')->name('home');
Route::get('home', 'PublicController@getHome')->name('home');
Route::get('our-excellence', 'PublicController@getOurExcellence');
Route::get('our-network', 'PublicController@getOurNetwork');
Route::get('our-services', 'PublicController@getOurServices');
Route::get('our-team', 'PublicController@getOurTeam');
Route::get('our-clients', 'PublicController@getOurClients');
Route::get('contact-us', 'PublicController@getContactUs');
Route::post('contact-us', 'PublicController@postContact');

Route::get('images/{name}', 'PublicController@getImage');

Route::prefix('edit')->group(function(){
  Route::get('home', 'HomeController@getHome');
  Route::post('home', 'HomeController@editHome');
  Route::get('our-excellence', 'HomeController@getOurExcellence');
  Route::post('our-excellence', 'HomeController@editOurExcellence');
  Route::get('our-network', 'HomeController@getOurNetwork');
  Route::post('our-network', 'HomeController@editOurNetwork');
  Route::get('our-services', 'HomeController@getOurServices');
  Route::post('our-services', 'HomeController@editOurServices');
  Route::get('our-team', 'HomeController@getOurTeam');
  Route::post('our-team', 'HomeController@editOurTeam');
  Route::get('our-clients', 'HomeController@getOurClients');
  Route::post('our-clients', 'HomeController@editOurClients');
});
