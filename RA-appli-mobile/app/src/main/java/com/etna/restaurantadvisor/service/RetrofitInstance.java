/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:28 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 6:28 AM
 *
 */

package com.etna.restaurantadvisor.service;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class RetrofitInstance {

    private static Retrofit retrofit = null;
    private static final String BASE_URL = "http://10.0.0.2:8000";

    public static GetMainModelService getMainModelService() {

        if(retrofit == null) {
            retrofit = new Retrofit
                    .Builder()
                    .baseUrl(BASE_URL)
                    .addConverterFactory(GsonConverterFactory.create())
                    .build();
        }

        return retrofit.create(GetMainModelService.class);
    }
}
