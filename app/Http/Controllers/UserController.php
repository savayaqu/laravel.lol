<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController
{
    public function shows()
    {
        /*Получение данных
            $students = DB::table('students')->get();
        */
        //Получение данных по условию
        $users = DB::table('users')->
        select('surname', 'name', 'login', 'password')->get();
        return view('user.show', ['users' => $users]);
    }

    public function show($id)
    {
        $users = DB::table('users')->
        where('id', '=', $id)
            ->first();

        return view('user.shows', ['users' => $users]);
    }
}
