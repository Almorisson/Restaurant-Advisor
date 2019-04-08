<?php

namespace App\Http\Controllers;


use App\Http\Resources\MenuCollection;
use App\Http\Resources\MenuResource;
use App\Model\Restaurant;
use App\Model\Menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends Controller
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
    public function store(Request $request)
    {

        $menu = new Menu();
        $menu->name = $request->input('name', 'A Menu');
        $menu->description = $request->input('description', "This a delicious menu like a ratatouille");
        $menu->price = $request->input('price', 15);
        $menu->menuNote = $request->input('menuNote', 3);
        $menu->composition = $request->input('composition', "");
        $menu->picture = $request->input('picture', "https://media-cdn.tripadvisor.com/media/photo-s/0d/60/d2/2c/img-20161021-wa0029-largejpg.jpg");

        $menu->save();

        return response(
            [
                "data" => new MenuResource($menu),
            ], Response::HTTP_CREATED);

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
        return $menu->update($request->all());
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
