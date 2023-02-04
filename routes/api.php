<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersApi;
use App\Models\Users;

Route::prefix('v1')->group(function(){
    Route::get('list', function (){
        return Users::listUser(10);
    });

    Route::post('register', [UsersApi::class, 'save']);
});

/* Route::prefix('v2')->group(function(){
    Route::get('', function (){
        //
    });
}); */
