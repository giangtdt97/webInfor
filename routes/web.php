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


use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('welcome');
});
Route::get('','HomeController@index')->name('home');

Route::get('about','AboutController@index')->name('about');
Route::get('services','ServicesController@index')->name('services');
Route::get('team','HumanResourceController@index')->name('team');
Route::get('contact','ContactController@index')->name('contact');
Route::get('quote','QuoteController@index');
Route::post('quoteadd','QuoteController@store')->name('quote');
Route::get('blog','BlogController@index')->name('blog');
Route::get('blog/{slug}','BlogController@show' )->name('blog.detail');
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
Route::group(['middleware' => 'locale'], function() {
    Route::get('language/{language}', 'HomeController@changeLanguage')
        ->name('language');
});
//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});
if (App::environment('production', 'staging')) {
    URL::forceScheme('https');
}

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
