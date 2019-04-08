/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:19 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 6:07 AM
 *
 */

package com.etna.restaurantadvisor.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import java.util.ArrayList;
import java.util.List;

public class Restaurant  {

    @SerializedName("menus")
    @Expose
    private List<Menu> menus;
    @SerializedName("menu")
    @Expose
    private Menu menu;

    @SerializedName("id")
    @Expose
    private Integer id;
    @SerializedName("user_id")
    @Expose
    private Integer userId;
    @SerializedName("name")
    @Expose
    private String name;
    @SerializedName("description")
    @Expose
    private String description;
    @SerializedName("picture")
    @Expose
    private String picture;
    @SerializedName("note")
    @Expose
    private Integer note;
    @SerializedName("location")
    @Expose
    private String location;
    @SerializedName("phoneNumber")
    @Expose
    private String phoneNumber;
    @SerializedName("websiteURL")
    @Expose
    private String websiteURL;
    @SerializedName("weekTimetable")
    @Expose
    private String weekTimetable;
    @SerializedName("weekendTimetable")
    @Expose
    private String weekendTimetable;


    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getUserId() {
        return userId;
    }

    public void setUserId(Integer userId) {
        this.userId = userId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getPicture() {
        return picture;
    }

    public void setPicture(String picture) {
        this.picture = picture;
    }

    public Integer getNote() {
        return note;
    }

    public void setNote(Integer note) {
        this.note = note;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(String phoneNumber) {
        this.phoneNumber = phoneNumber;
    }

    public String getWebsiteURL() {
        return websiteURL;
    }

    public void setWebsiteURL(String websiteURL) {
        this.websiteURL = websiteURL;
    }

    public String getWeekTimetable() {
        return weekTimetable;
    }

    public void setWeekTimetable(String weekTimetable) {
        this.weekTimetable = weekTimetable;
    }

    public String getWeekendTimetable() {
        return weekendTimetable;
    }

    public void setWeekendTimetable(String weekendTimetable) {
        this.weekendTimetable = weekendTimetable;
    }


    public Menu getMenu() {
        return menu;
    }

    public void setMenu(Menu menu) {
        this.menu = menu;
    }
}
