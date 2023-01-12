<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function calculadora(){
        return view('calculadora');
    }

    public function calcular(Request $request){
        $num1 = $request -> num1;
        $num2 = $request -> num2;
        $operador = $request -> operador;

        switch($operador){
            case('+'):
                $resultado = $num1 + $num2;
                break;
            case('-'):
                $resultado = $num1 - $num2;
                break;
            case('*'):
                $resultado = $num1 * $num2;
                break;
            case('/'):
                $resultado = $num1 / $num2;                
                break;
        }

        return view('calcular', compact('resultado'));
    }

    public function welcome()
    {
        return view('welcome');
    }
}


