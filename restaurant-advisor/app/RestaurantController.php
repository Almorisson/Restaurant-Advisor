<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\RestaurantResource;
use App\Model\Restaurant;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Validator;

class RestaurantController extends Controller
{
    /**
     * RestaurantController constructor.
     */

    public function  __construct()
    {
        $this->middleware('auth:api')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restos = RestaurantCollection::collection(Restaurant::all( ));
        return response()->json($restos, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {

        return response()->json($restaurant::save($request->all()), Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return ( new RestaurantResource($restaurant));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Restaurant $request, Restaurant $restaurant)
    {

        $restaurant = $restaurant->update($request->all());

        return response()->json($restaurant, Response::HTTP_OK);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * Any errors
     */
    public function errors() {
        return response()->json(['error' => 'Something went wrong!']);
    }


}
