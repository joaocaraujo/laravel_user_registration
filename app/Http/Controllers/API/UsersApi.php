<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersApi extends Controller
{
    public function save(Request $request) {
        if(!Users::registerUser($request)) {
            return response("Created", 201);
        } else {
            return response("error", 409);
        }
    }
}
