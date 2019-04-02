<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\RestaurantResource;
use App\Model\Restaurant;
use Symfony\Component\HttpFoundation\Response;
//use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

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
        $restos = RestaurantCollection::collection(Restaurant::paginate(10));
        return \response()->json($restos, Response::HTTP_OK);
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
    public function store(Request $request)
    {
        if($request->isMethod('post')) {

            $resto = new RestaurantResource($request);
            $resto = $request->only(['description', 'name', 'location', 'note']);
            $resto = $request->except(['websiteURL', 'phoneNumber']);

            //$resto->create();

            return response([
                "data" => $resto,
            ], Response::HTTP_CREATED);
        }

        die(Response::HTTP_NO_CONTENT);

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
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {

        $datas = $request->json(array([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'picture' => $request->get('picture'),
            'price' => $request->get('price')
        ]));

        return $datas;

        return $request->json(array(
            $restaurant->name => $request->get('name'),
            $restaurant->description => $request->get('description'),
            $restaurant->picture => $request->get('picture'),
            $restaurant->price => $request->get('price')));

        return $restaurant->update($request->json()->all());

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
}
