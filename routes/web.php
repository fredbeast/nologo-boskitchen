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

//Route::get('/', function () {
//    return view('app');
//});

//Route::get('/{any}', 'SinglePageController@index')->where('any', '^((?!api).)*');

//, 'middleware' => ['auth', 'admin']
Route::group(['prefix' => 'admin'], function () {
    Route::resource('recipes', 'RecipeadminController')->except([
        'destroy'
    ]);
    Route::get('/', 'AdminController@index')->name('home');
    Route::delete('/recipe/{id}', 'RecipeadminController@destroy');
});

Route::get('{all}', function () {
    return view('app');
})->where('all', '^((?!api).)*');


