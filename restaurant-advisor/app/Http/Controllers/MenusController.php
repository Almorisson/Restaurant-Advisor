<?php

namespace App\Http\Controllers;


use App\Http\Resources\MenuCollection;
use App\Http\Resources\MenuResource;
use App\Model\Restaurant;
use App\Model\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Restaurant $restaurant)
    {
        return MenuCollection::collection($restaurant->menus);
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
        $menu = new Menu($request->all());

        $restaurant->menus()->save($menu);

        return response()->json(['data' => new Menu($menu)], Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, Menu $menu)
    {
        //return new RestaurantResource($menu::all());
        return (new MenuResource($menu));
        //return $restaurant->menus()->find($menu->id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        return response()->json($menu->update($request->all(), Response::HTTP_OK));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, Menu $menu)
    {
        $menu->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
