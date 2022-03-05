<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba2', function () {
    return 'prueba 2 dani';
});

Route::get('client/{id?}', function ($id=0) {
    if($id==0){
        return 'No hay cliente';
    }
    else{
        return 'el id del cliente es: '.$id;
    }
})->where("id", "[0-9]+");

Route::get('product/{id?}', function ($id=0) {
    return view('product', array('id' => $id));
})->where("id", "[0-9]+");