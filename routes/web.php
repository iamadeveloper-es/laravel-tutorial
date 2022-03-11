<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

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
})->name('welcome');;

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

Route::get('noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

// Controllers
Route::get('noticias-controller', [controlador::class, 'noticias'])->name('noticias-controller');
Route::get('blog-controller', [controlador::class, 'blog'])->name('blog-controller');
Route::get('lista/{nombre?}', [controlador::class, 'lista'])->name('lista');