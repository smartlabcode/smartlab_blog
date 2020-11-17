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

Route::get('/{lang?}', 'BlogController@index');
Route::get('/blog/{id}/{language?}/{preview?}', 'BlogController@show');

Route::put('/language', 'LanguageController@switchLanguage');
Route::post('contact', 'ContactController@handleContactInfo');
Route::get('schedule', function () {
    \Illuminate\Support\Facades\Artisan::call('schedule:run');

    return "ok";
});
