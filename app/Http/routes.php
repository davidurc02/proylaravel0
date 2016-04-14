<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('create');
});

Route::get('prueba',function(){
    $user = new User;

    $user->email = 'otraprueba@prueba.com';
    $user->real_name = 'otra Cuenta Prueba';
    $user->password = 'prueba';

    $user->save();

    return "El usuario prueba ha sido salvado a la base de datos";
});

Route::resource('user', 'UsersController');
