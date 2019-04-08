
/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:19 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 6:14 AM
 *
 */

package com.etna.restaurantadvisor.service;

import com.etna.restaurantadvisor.model.MainModel;
import com.etna.restaurantadvisor.model.Menu;
import com.etna.restaurantadvisor.model.Restaurant;
import com.etna.restaurantadvisor.model.User;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Path;

public interface GetMainModelService {

    @GET("api/restaurants")
    Call<List<Restaurant>> getRestaurants();

    @GET("api/restaurants/{restaurant}")
    Call<Restaurant> getRestaurant(@Path("restaurant") int restaurantId);

    @GET("api/restaurants/{restaurant}/menus")
    Call<List<Menu>> getMenus();

    @GET("api/restaurants/{restaurant}/menus/{menu}")
    Call<Menu> getMenu(@Path("menu") int menuId);

    @GET("/user")
    Call<User> getUser();

    @GET("api/users")
    Call<List<User>> getUsers();

    @POST("api/restaurants/")
    Call<Restaurant> setRestaurant(@Body Restaurant restaurant);

    @POST("api/restaurants/{restaurant}/menus")
    Call<Menu> setRestaurant(@Body @Path("restaurant") Menu menu);



}
