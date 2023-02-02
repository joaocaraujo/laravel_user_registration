<?php

namespace App\Http\Controllers;

use Hash;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
       return view('user.register');
    }

    public function save(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:5"
        ]);

        if (Users::registerUser($request)) {
            return view('user.error');
        } else {
            return view('user.success', [
                "username" => $request->input('name')
            ]);
        }

        
    }
}
