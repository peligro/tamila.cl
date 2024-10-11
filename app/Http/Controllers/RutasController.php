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
    public function rutas_terminos_y_condiciones()
    {
        return view("rutas.terminos_y_condiciones");
    }
    public function rutas_politica_de_privacidad()
    {
        return view("rutas.politica_de_privacidad");
    }
}
