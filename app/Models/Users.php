<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hash;

class Users extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'users';

    public static function listUser(int $limit) {
        $sql = self::where("id", ">", 2)
        ->select([
            "id",
            "name",
            "email",
            "password",
            "date_register"
        ])
        ->limit($limit)
        ->get();

        return $sql;
    }

    public static function registerUser(Request $request) {
        $sql = self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => Hash::make($request->input('password')),
            "date_register" => DB::raw('NOW()')
        ]);
//        dd($sql->toSql(), $request->all());

    }
}
