<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function rutas_sobre_nosotros()
    {
        return view("rutas.sobre_nosotros");
    }
    public function rutas_servicios()
    {
        return view("rutas.servicios");
    }
}
