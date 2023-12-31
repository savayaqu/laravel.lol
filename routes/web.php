<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* Создание маршрута /test с выводом  сообщения "Тестовая страница!" */
Route::get('/test', function (){
   return "Тестовая страница!";
});
Route::get('/test/1', function (){
    return "Тестовая страница 1!";
});
Route::get('/test/2', function (){
    return "Тестовая страница 2!";
});
/* Параметры в маршруте */
Route::get('/post/{id}', function ($id){
   return "Пост " . $id;
});

Route::get('/user/{name}', function ($name){
   return "Привет " .  $name;
});

/* Несколько параметров в маршруте */
Route::get('/post/{cardId}/{postId}', function ($cardId, $postId){
    return $cardId . " - " . $postId;
});
Route::get('/user/{surname}/{name}', function ($surname, $name) {
   return "Hi, " . $surname . $name ;
});

/* Необязательные параметры - ? */
Route::get('/posts/page/{page?}', function ($page = 1){
   return "Number page: " . $page;
});

/* Пусть адрес вида /city/:city, где в параметре ьудет задаваться говород. Сделайте так*/
Route::get('/city/{city?}', function ($city = 'Томск'){
    return "City - " . $city;
});

/*Ограничение параметров */
Route::get('/users/{age}', function ($age){
    return "Возраст чела: " . $age;
})->where('age', '[0-9]+');

Route::get('/govsign/{sign}/id', function ($sign, $id){
    return "Номер: " . $sign . ". Регион: " . $id . ".";
})->where('sign', '[a-z]+')->where('id', '[0-9]+');

/*
 * whereAlpha - ограничение только на буквы
 * whereNumber - ограничение только на цифры
 * hereAlphaNumeric - ограничение на буквы и цифры
 * ограничение на id сделано глобально на все маршруты в файле App\Providers\RouteServiceProvider.php
 */
Route::get('/govsign2/{sign}/id', function ($sign, $id){
    return "Номер: " . $sign . ". Регион: " . $id . ".";
})->whereAlpha('sign');

/* Разрешение конфликтов в маршрутах
   сначало указываем частные, потом общие
 */
Route::get('/test2/all', function (){
    return "All tests" ;
});
Route::get('/test2/{n}', function ($n) {
    return "Test - " . $n;
});

/* Группировка маршрутов */
Route::prefix('/test3')->group( function (){
    Route::get('/all', function (){
        return "All tests" ;
    });
    Route::get('/{n}', function ($n) {
        return "Test - " . $n;
    });
});





/* Маршрут, использующий контроллер */
/* Route::get('/маршрут', ['полное имя контроллеры', 'имя действия']) */
Route::get('/hi', ['App\Http\Controllers\PostController','hello']);
/* Если мы заюзали имя контроллера(use App\Http\Controllers\PostController;), то можем писать так... */
Route::get('/hello', [PostController::class,'hello']);


/* Перадача параметра маршрута в контроллер*/
Route::get('/hi/{$name}', [PostController::class, 'hello2']);

/* Применение параметра маршрутов*/
Route::get('/hello/{id}', [PostController::class, 'hello3'])->where('id', '[1-4]');

Route::get('/hello5/{name}', [PostController::class, 'hello5']);

/* Представление */
Route::get('/hello6', [PostController::class, 'hello6']);

Route::get('/hello7/{name}', [PostController::class, 'hello7']);


Route::get('/testing', [TestingController::class, 'index']);


use App\Http\Controllers\StudentController;
Route::get('/students', [StudentController::class, 'shows']);
Route::get('/students/{id}', [StudentController::class, 'show']);

use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'shows']);
Route::get('/users/{id}', [UserController::class, 'show']);
