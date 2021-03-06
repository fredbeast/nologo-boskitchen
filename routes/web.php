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

// Setup Auth Routes within Admin
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

// Setup Admin routes + Auth middleware

Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin','web']], function () {
    // Recipe Admin Controller
    Route::resource('recipes', 'RecipeadminController')->except([
        'destroy'
    ]);
    Route::delete('/recipes/{id}', 'RecipeadminController@destroy');
    // Category Admin Controller
    Route::resource('categories', 'CategoryadminController')->except([
        'destroy'
    ]);
    Route::delete('/categories/{id}', 'CategoryadminController@destroy');
    // Category Admin Controller
    Route::resource('kitchens', 'KitchenadminController')->except([
        'destroy'
    ]);
    Route::delete('/kitchens/{id}', 'KitchenadminController@destroy');
    // Admin Portal
    Route::get('/', 'AdminController@index');
});

// PWA Routes

Route::get('{all}', function () {
    return view('app');
})->where('all', '^((?!api).)*');



