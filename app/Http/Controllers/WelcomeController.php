<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Supongamos que esta es tu condición
        $valor = false; // O la lógica que determine si es verdadero o falso

        if ($valor) {
            // Si el valor es verdadero, redirige a la vista 'welcome'
            return view('welcome');
        } else {
            // Si el valor es falso, redirige a la ruta '/login'
            return redirect('/umm/login');
        }
    }
}
