<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hello() {
        return "Привет, лучшая группа!";
    }
    public function hello2($name) {
        return "Hi, $name";
    }
    public function  hello3($id) {
        $hi = [
            1=> "Good day!",
            2=> "Good evening",
            3=> "Good night",
            4=> "Good morning"
        ];
        return $hi[$id];
    }
    public function  hello5($name) {
        $users = [
            'Дмитрий'=> 'Питер',
            'Алексей'=> 'Асино',
            'Елизавета'=> 'Москва'
        ];
        if (  isset($users[$name])  ) {
            return $users[$name];
        }
        else {
            return "error";
        }
    }
    public  function hello6() {
        return view('post.hello');
    }
    public  function  hello7($name) {
        return view('post.hello7', ['name' => $name, 'title']);
    }
}
