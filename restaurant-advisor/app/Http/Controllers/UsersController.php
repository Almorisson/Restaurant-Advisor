<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     */
    public function __construct() {

        $this->middleware('auth:api');
    }

    public function index() {

        return UserCollection::collection(User::all());
    }

    /**
     * @param User $user
     * @return UsersResource
     */

    public function show(User $user) {

        return new UsersResource($user);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request) {

        $rules = [
            'name' => 'required|string|max:225:users',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        $request['password'] = bcrypt($rules['password']);
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_OK);
        }

        return response()->json(User::create($request->all()), Response::HTTP_CREATED);
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user) {

        $rules = [
            'name' => 'required|string|max:225:users',
            'email' => 'required|email',

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $request['password'] = bcrypt('password');
        $request['password'] = bcrypt('password_confirmation');
        return response()->json($user->update($request->all()),Response::HTTP_OK);
    }

    public function destroy(User $user) {

        $user == null ? $this->errors(): $user->delete();;

        return response(null, Response::HTTP_NO_CONTENT);

    }

    public function errors() {

        return \response()->json("The user you are trying to delete is no longer exist in the database!");
    }

}
