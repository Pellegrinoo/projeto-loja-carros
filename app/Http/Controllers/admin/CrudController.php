<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carros;

class CrudController extends Controller
{
    public function crudInicial(){
        $carros = Carros::paginate(10);

        return view('admin.admin',
        compact('carros'));
    }

    public function filtraModelo(Request $modelo){
        $query = Carros::query();
        $parametro = $modelo->input('search');

        $query->where('modelo', 'like', '%' . $parametro . '%');

        $carros = $query->paginate(10);

        return view('admin.admin',
        compact('carros'));
    }
}
