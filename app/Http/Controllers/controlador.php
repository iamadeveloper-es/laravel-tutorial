<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function noticias(){
        return view('noticias-controller');
    }

    public function blog(){
        return view('blog-controller');
    }

    public function lista($nombre=null){

        $productos=['mesas', 'sillas', 'manteles'];

        return view('lista', array('productos' => $productos, 
            'nombre' => $nombre
        ));
    }
}
