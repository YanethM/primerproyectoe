<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitioController extends Controller
{
    //
    public function index()
    {
     return view('sitio/index');
    }


    public function saludar(Request $request, $nombre)
    {
     return view('sitio/saludar', ['elNombre' => $nombre]);
    }

    public function saludarCualquier(Request $request, $nombre, $cargo = false)
    {
     return view('sitio/saludarCualquier', ['elNombre' => $nombre, 'elCargo' => $cargo]);
    }


}
