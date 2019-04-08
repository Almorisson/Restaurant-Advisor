/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:19 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 5:56 AM
 *
 */

package com.etna.restaurantadvisor.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import java.util.List;

public class MainModel {

        @SerializedName("restaurant")
        @Expose
        private Restaurant restaurant;

        @SerializedName("restaurants")
        @Expose
        private List<Restaurant> restaurants = null;

        @SerializedName("menus")
        @Expose
        private List<Menu> menus = null;

        public Restaurant getRestaurant() {
            return restaurant;
        }

        public void setRestaurant(Restaurant restaurant) {

            this.restaurants.add(restaurant);
        }

        public List<Menu> getMenus() {
            return menus;
        }

        public void setMenu(Menu menu) {
            this.menus.add(menu);
        }

        public List<Restaurant> getRestaurants() {
            return restaurants;
        }

}
