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

// Get a list of all users that register to the application

Route::apiResource('/users', 'UsersController')->middleware('auth:api');

// Get a list of all Restaurants
Route::apiResource('/restaurants', 'RestaurantController');

// Perform CRUD operations on a particular restaurant and menu(s)
Route::group(['prefix' => '/restaurants/{restaurant}'], function ($restaurant) {
    Route::apiResource('menus', 'MenuController');
});

//Route::delete('/restaurants/{restaurant}/menus/{menu}', 'MenuController@destroy');