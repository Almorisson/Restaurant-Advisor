<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct() {

        $this->middleware('auth:api');
    }

    public function index() {

        return UserCollection::collection(User::all());
    }


    public function show(User $user) {

        return new UsersResource($user);
    }
}
