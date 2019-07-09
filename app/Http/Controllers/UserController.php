<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resource\UserCollection;
use App\Http\Resource\UserResource;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return new UserCollection($user);
    }

    public function show($id)
    {
        $user = User::find($id);

        return new UserResource($user);
    }
}
