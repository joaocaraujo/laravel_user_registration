<?php

namespace App\Http\Controllers;

use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
       return view('user.register');
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email"
        ]);

        dd($request->all());
    }
}
