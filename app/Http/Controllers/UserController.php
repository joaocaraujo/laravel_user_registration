<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        echo 10;
    }

    public function save(Request $request) {
        dd($request->all());
    }
}
