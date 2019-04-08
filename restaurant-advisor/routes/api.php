<?php

use Illuminate\Http\Request;
use App\Model\Restaurant;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Auth::routes();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Get a list of all about usersn
//Route::apiResource('/users', 'UsersController')->middleware('auth:api');

// Any errors
//Route::any('/errors', 'UsersController@errors')->name('users_errors')->middleware('auth:api');

// Get a list of all Restaurants
//Route::apiResource('/restaurants', 'RestaurantsController');

// All bout Restaurants resources
Route::get('/restaurants', 'RestaurantsController@index')->name('index');
Route::get('/restaurants/{restaurant}', 'RestaurantsController@show')->name('show');
Route::post('/restaurants', 'RestaurantsController@store')->middleware('auth');
Route::put('/restaurants/{restaurant}', 'RestaurantsController@update');
Route::delete('/restaurants/{restaurant}', 'RestaurantsController@destroy');

// Perform CRUD operations on a particular restaurant and menu(s)
//Route::group(['prefix' => '/restaurants/{restaurant}'], function () {
//    Route::apiResource('menus', 'MenusController');
//});

//Route::get('restaurants/{restaurant}/menus', 'RestaurantsController@menus')->name('menus');





//Route::delete('/restaurants/{restaurant}/menus/{menu}', 'MenusController@destroy');