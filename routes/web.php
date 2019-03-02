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


Route::get('/', 'PagesController@getIndex');

Route::get('/faq', 'PagesController@getFaq');

Route::get('/loginorigin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'PagesController@getBlog');

/*
|--------------------------------------------------------------------------
| Oneway Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('blog/{pair}', 'Blog\BlogController@getIndex')->name('blog.index');


Route::get('/careers', 'PagesController@getCareers');

/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/cxa-terms-conditions', 'PagesController@getCXA_Terms_Conditions');

/*
|--------------------------------------------------------------------------
| Arbot Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/arbot', 'PagesController@getArbot');

/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/ava', 'PagesController@getAva');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/privacy-policy', 'PagesController@getPrivacy_Policy');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/cookie-policy', 'PagesController@getCookie_Policy');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/website-terms-of-use', 'PagesController@getWebsite_Terms_of_Use');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/arbi', 'PagesController@getArbi');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/specto', 'PagesController@getSpecto');
/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/broca', 'PagesController@getBroca');

Route::get('/contact-us', 'PagesController@getContactus');

/*
|--------------------------------------------------------------------------
| Terms and Conditions Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/oneway', 'PagesController@getOneway');