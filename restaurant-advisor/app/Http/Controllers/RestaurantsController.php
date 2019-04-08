<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Http\Resources\MenuResource;
use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\RestaurantResource;
use App\Model\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class RestaurantsController extends Controller
{
    /**
     * RestaurantController constructor.
     */

    public function  __construct()
    {
        $this->middleware('auth:api')->except('index');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * Show all restaurants
     */

    public function index()
    {
        $restos = RestaurantCollection::collection(Restaurant::all());
        return response()->json($restos, Response::HTTP_OK);
    }

    public function show(Restaurant $restaurant)
    {
        $restaurant = $restaurant::with('menus')->findOrFail($restaurant->id);

        $response['restaurant'] = $restaurant;
        $response['menus'] = $restaurant->menus;

        $resto = RestaurantResource::make($response['restaurant']);
        $menu =  MenuResource::make($response['menus']);

        //return response()->json($menu);
        //$response = new RestaurantResource(Restaurant::with('menus'));
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @param Restaurant $restaurant
     * @return \Illuminate\Http\JsonResponse
     * Store a Restaurant
     */

    public function store(RestaurantRequest $request)
    {

        $rules = [
            'name' => 'required|string|unique:restaurants',
            'description' => 'required|string|min:15',
            'picture' => 'required|string',
            'note' => 'required|int',
            'phoneNumber' => 'requiredLint|max:20',
            'location' => 'required|string|max:255',
            'websiteURL' => 'required|url',
        ];


        //$request['user_id'] = $user->id;
        /*$validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }*/

        //return response()->json(Restaurant::create($request->all()), Response::HTTP_CREATED);

    }

    /**
     * @param Restaurant $request
     * @param Restaurant $restaurant
     * @return \Illuminate\Http\JsonResponse
     * Update a Restaurant
     */

    public function update(Restaurant $request, Restaurant $restaurant)
    {
        $restaurant = $restaurant->update($request->all());

        return response()->json($restaurant, Response::HTTP_OK);

    }

    /**
     * @param Restaurant $restaurant
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     * Destro a Restaurant
     */
    public function destroy(Restaurant $restaurant)
    {
        $id = $restaurant->id;
        return response()->json(["message" => "Le Restaurant numéro ". $id." a été supprimé avec succès", "deleted" =>  $restaurant->delete()], Response::HTTP_OK);
    }

    /**
     * @param Restaurant $restaurant
     * @return \Illuminate\Http\JsonResponse
     * Show  all menus of a particular restaurant
     */
    public function menus(Restaurant $restaurant) {

        $menus = $restaurant->menus;

        return response()->json($menus, Response::HTTP_OK);
    }

}
