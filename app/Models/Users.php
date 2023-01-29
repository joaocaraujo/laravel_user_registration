<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'users';

    public static function listUser(int $limit) {
        $sql = self::select([
            "id",
            "name",
            "email",
            "date_register"
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function registerUser(Request $request) {
        $sql = self::insert([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "date_register" => DB::raw('NOW()')
        ]);
        dd($sql->toSql(), $request->all());

    }
}
