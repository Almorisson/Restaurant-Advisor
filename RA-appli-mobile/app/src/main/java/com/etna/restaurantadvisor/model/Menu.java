/*
 * *
 *  * Created by Mor NDIAYE on 4/6/19 6:19 AM
 *  * Copyright (c) 2019 . All rights reserved.
 *  * Last modified 4/6/19 5:28 AM
 *
 */

package com.etna.restaurantadvisor.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Menu {

        @SerializedName("id")
        @Expose
        private Integer id;
        @SerializedName("restaurant_id")
        @Expose
        private Integer restaurantId;
        @SerializedName("user_id")
        @Expose
        private Integer userId;
        @SerializedName("name")
        @Expose
        private String name;
        @SerializedName("description")
        @Expose
        private String description;
        @SerializedName("composition")
        @Expose
        private String composition;
        @SerializedName("price")
        @Expose
        private Integer price;
        @SerializedName("picture")
        @Expose
        private String picture;
        @SerializedName("menuNote")
        @Expose
        private Integer menuNote;
        @SerializedName("created_at")
        @Expose
        private String createdAt;
        @SerializedName("updated_at")
        @Expose
        private String updatedAt;

        public Integer getId() {
            return id;
        }

        public void setId(Integer id) {
            this.id = id;
        }

        public Integer getRestaurantId() {
            return restaurantId;
        }

        public void setRestaurantId(Integer restaurantId) {
            this.restaurantId = restaurantId;
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

        public String getComposition() {
            return composition;
        }

        public void setComposition(String composition) {
            this.composition = composition;
        }

        public Integer getPrice() {
            return price;
        }

        public void setPrice(Integer price) {
            this.price = price;
        }

        public String getPicture() {
            return picture;
        }

        public void setPicture(String picture) {
            this.picture = picture;
        }

        public Integer getMenuNote() {
            return menuNote;
        }

        public void setMenuNote(Integer menuNote) {
            this.menuNote = menuNote;
        }

        public String getCreatedAt() {
            return createdAt;
        }

        public void setCreatedAt(String createdAt) {
            this.createdAt = createdAt;
        }

        public String getUpdatedAt() {
            return updatedAt;
        }

        public void setUpdatedAt(String updatedAt) {
            this.updatedAt = updatedAt;
        }

}
