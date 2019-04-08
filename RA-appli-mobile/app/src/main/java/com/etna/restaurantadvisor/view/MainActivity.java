/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:19 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 3:09 AM
 *
 */

package com.etna.restaurantadvisor.view;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.etna.restaurantadvisor.R;
import com.etna.restaurantadvisor.model.MainModel;
import com.etna.restaurantadvisor.model.Restaurant;
import com.etna.restaurantadvisor.service.GetMainModelService;
import com.etna.restaurantadvisor.service.RetrofitInstance;
import com.etna.restaurantadvisor.view.RegistrationActivity;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity extends AppCompatActivity {

    private EditText email;
    private EditText password;
    private Button btnSignIn;
    private Button btnSignUp;
    private Button btnShowRestos;
    private ArrayList<Restaurant> restaurantsList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        email = findViewById(R.id.email_login);
        password = findViewById(R.id.password_login);
        btnSignIn = findViewById(R.id.signin_btn);
        btnSignUp = findViewById(R.id.signup_btn);
        btnShowRestos = findViewById(R.id.show_restos);


        btnSignIn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String mEmail = email.getText().toString().trim();
                String mPassword = password.getText().toString().trim();

                if (TextUtils.isEmpty(mEmail)) {
                    email.setError("Le champ " + email.getHint() + " est requis.");
                }

                if (TextUtils.isEmpty(mPassword)) {
                    password.setError("Le champ " + password.getHint() + " est requis.");
                }

            }
        });

        btnSignUp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), RegistrationActivity.class));
            }
        });

        btnShowRestos.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), RestaurantActivity.class));
            }
        });


    }


}
