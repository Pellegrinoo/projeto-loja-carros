<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carros;

class IndexController extends Controller
{
    public function getCarros(){
        $carros = Carros::all();
        return view('index',
        compact('carros'));
    }

    public function getHatch(){
        $carros = Carros::where('carroceria', 'Hatch')->get();

        return view('index',
        compact('carros'));
    }

    public function getSedan(){
        $carros = Carros::where('carroceria', 'Sedan')->get();

        return view('index',
        compact('carros'));
    }

    public function info($id){
        $carro = Carros::findOrFail($id);

        return view('carros.info',
        compact('carro'));
    }
}
