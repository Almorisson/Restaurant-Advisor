/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:20 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 3:09 AM
 *
 */

package com.etna.restaurantadvisor.view;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.etna.restaurantadvisor.R;

public class RegistrationActivity extends AppCompatActivity {
    private EditText name;
    private EditText email;
    private EditText password;
    private EditText password_confirm;
    private Button btnSignIn;
    private Button btnSignUp;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registration);

        name = findViewById(R.id.name_reg);
        email = findViewById(R.id.email_reg);
        password = findViewById(R.id.password_reg);
        password_confirm = findViewById(R.id.password_reg_confirm);

        btnSignIn = findViewById(R.id.signin_reg_btn);
        btnSignUp = findViewById(R.id.signup_reg_btn);

        btnSignUp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String mName = name.getText().toString().trim();
                String mEmail  = email.getText().toString().trim();
                String mPassword = password.getText().toString().trim();
                String mPasswordConfirm = password_confirm.getText().toString().trim();

                if (TextUtils.isEmpty(mName)) {
                    name.setError("Le champ " + name.getHint() + " est requis.");
                }

                if (TextUtils.isEmpty(mEmail)) {
                    email.setError("Le champ " + email.getHint() + " est requis.");
                }

                if (TextUtils.isEmpty(mPassword)) {
                    password.setError("Le champ " + password.getHint() + " est requis.");
                }
                if (TextUtils.isEmpty(mPasswordConfirm)) {
                  password_confirm.setError("Le champ " + password_confirm.getHint() + " est requis.");
                }

                if(!(mPassword.equals(mPasswordConfirm))) {
                    password_confirm.setError("Les deux mot de passe ne sont pas identiques.");
                }


            }
        });

        btnSignIn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(getApplicationContext(), MainActivity.class));
            }
        });
    }
}
