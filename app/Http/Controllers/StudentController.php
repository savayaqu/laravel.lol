<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function shows(){
        /*Получение данных
            $students = DB::table('students')->get();
        */
        //Получение данных по условию
        $students = DB::table('students')->
        select('surname', 'name', 'patronymic', 'sex')->
        where('name', '=', 'Вадим')->
        where('patronymic', '=', 'Анатольевич')->
        get();
    return  view('student.show', ['students' => $students]);
    }

    public function show($id) {
        $students = DB::table('students')->
        select('surname', 'name', 'patronymic', 'sex')->
        where('id', '=', $id)->
        get();
        return  view('student.show', ['students' => $students]);    }
}
