/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 8:16 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 8:16 AM
 *
 */

package com.etna.restaurantadvisor.view;

import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

import com.etna.restaurantadvisor.R;
import com.etna.restaurantadvisor.model.MainModel;
import com.etna.restaurantadvisor.model.Restaurant;
import com.etna.restaurantadvisor.service.GetMainModelService;
import com.etna.restaurantadvisor.service.RetrofitInstance;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class RestaurantActivity extends AppCompatActivity {

    private ArrayList<Restaurant> restaurantsList;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_restaurant);

        getRestaurants();
    }

    public Object getRestaurants() {

        GetMainModelService getDatas = RetrofitInstance.getMainModelService();

        Call<MainModel> call = getDatas.getRestaurants();
        call.enqueue(new Callback<MainModel>() {
            @Override
            public void onResponse(@NonNull Call<MainModel> call, @NonNull Response<MainModel> response) {

                MainModel data = response.body();

                if(data != null && data.getRestaurants() != null) {
                    restaurantsList = (ArrayList<Restaurant>) data.getRestaurants();

                        for(Restaurant resto : restaurantsList) {

                           Log.i("Restaurant Advisor", "Restaurant numéro " + resto.getName());

                        }
                }
            }

            @Override
            public void onFailure(@NonNull Call<MainModel> call, @NonNull Throwable t) {
                Log.e("Restaurant Advisor", "FAILURE OF Request");
            }
        });


        return restaurantsList;

    }
}
