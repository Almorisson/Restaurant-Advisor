<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\UserCollection;
use App\Model\Restaurant;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RestaurantCollection::collection(Restaurant::paginate(10));
        //return view('home');
    }
}