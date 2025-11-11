<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carros;

class EditCarroController extends Controller
{
    public function infoCarroEdit($id){
        $carro = Carros::findOrFail($id);

        return view('admin.editCarro',
        compact('carro'));
    }

    public function editarCarro(Request $request){
        $request->validate([
            'id'            => 'required|exists:carros,id',
            'modelo'        => 'required|string|max:255',
            'marca'         => 'required|string|max:255',
            'ano'           => 'required|integer|min:1900|max:' . date('Y'),
            'cor'           => 'required|string|max:50',
            'preco'         => 'required|string',
            'imagem_capa'   => 'nullable|url|max:255',
            'imagem_url1'   => 'nullable|url|max:255',
            'imagem_url2'   => 'nullable|url|max:255',
            'imagem_url3'   => 'nullable|url|max:255',
            'carroceria'    => 'required|string|max:100',
            'quilometragem' => 'required|string',
            'combustivel'   => 'required|string|max:50',
            'motor'         => 'required|string|max:50',
            'cambio'        => 'required|string|max:50',
            'descricao'     => 'nullable|string',
        ]);


        $carro = Carros::find($request->input('id'));

        if (!$carro) {
        // Loga o erro e redireciona com uma mensagem de erro.
        // Isso é o que a validação 'exists' faria, mas é bom ter uma segurança.
        return redirect()->route('admin')->with('error', 'Erro: Carro não encontrado para edição.');
    }
        
        $preco_limpo = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('preco'));
        
        $km_limpa = str_replace(['.', ','], ['', ''], $request->input('quilometragem'));


        $carro->modelo        = $request->input('modelo');
        $carro->marca         = $request->input('marca');
        $carro->ano           = $request->input('ano');
        $carro->cor           = $request->input('cor');
        $carro->preco         = (float)$preco_limpo;
        $carro->quilometragem = (int)$km_limpa; 
        $carro->imagem_capa   = $request->input('imagem_capa');
        $carro->imagem_url   = $request->input('imagem_url1');
        $carro->imagem_url2   = $request->input('imagem_url2');
        $carro->imagem_url3   = $request->input('imagem_url3');
        $carro->carroceria    = $request->input('carroceria');
        $carro->combustivel   = $request->input('combustivel');
        $carro->motor         = $request->input('motor');
        $carro->cambio        = $request->input('cambio');
        $carro->descricao     = $request->input('descricao');

        $carro->save();

        return redirect()->route('admin');
    }

    public function excluirCarro($id){
        $carro = Carros::find($id);

        if($carro){
            $carro->delete();
            return redirect()->route('admin');
        }
    }

    public function cadastrarCarro(Request $request){
        /*$request->validate([
            'id'            => 'required|exists:carros,id',
            'modelo'        => 'required|string|max:255',
            'marca'         => 'required|string|max:255',
            'ano'           => 'required|integer|min:1900|max:' . date('Y'),
            'cor'           => 'required|string|max:50',
            'preco'         => 'required|string',
            'imagem_capa'   => 'nullable|url|max:255',
            'imagem_url1'   => 'nullable|url|max:255',
            'imagem_url2'   => 'nullable|url|max:255',
            'imagem_url3'   => 'nullable|url|max:255',
            'carroceria'    => 'required|string|max:100',
            'quilometragem' => 'required|string',
            'combustivel'   => 'required|string|max:50',
            'motor'         => 'required|string|max:50',
            'cambio'        => 'required|string|max:50',
            'descricao'     => 'nullable|string',
        ]);*/

        $preco_limpo = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('preco'));
        
        $km_limpa = str_replace(['.', ','], ['', ''], $request->input('quilometragem'));

        $carro = new Carros;

        $carro->modelo        = $request->input('modelo');
        $carro->marca         = $request->input('marca');
        $carro->ano           = $request->input('ano');
        $carro->cor           = $request->input('cor');
        $carro->preco         = (float)$preco_limpo;
        $carro->quilometragem = (int)$km_limpa; 
        $carro->imagem_capa   = $request->input('imagem_capa');
        $carro->imagem_url   = $request->input('imagem_url1');
        $carro->imagem_url2   = $request->input('imagem_url2');
        $carro->imagem_url3   = $request->input('imagem_url3');
        $carro->carroceria    = $request->input('carroceria');
        $carro->combustivel   = $request->input('combustivel');
        $carro->motor         = $request->input('motor');
        $carro->cambio        = $request->input('cambio');
        $carro->descricao     = $request->input('descricao');

        $carro->save();

        return redirect()->route('admin');
    }
}
