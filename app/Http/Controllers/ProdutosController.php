<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    // Código função Listar

    public function index() {

        return Produtos::all();
    }

    // Código função Gravar
    public function store(Request $req) {
        Produtos::create([
            "name" => $req->name,
            "price" => $req->price
        ]);

        return response (["Cadastro Efetuado com sucesso!", 200]);

    }

    //Código função editar

    public function uptade(Request $req) {

        $Produto = Produtos::find($req->id);

        $Produto->name = $req->name;
        $Produto->price = $req->price;

        $Produto->save();

        return response("Produto Alterado com sucesso!", 200);
    }

    //Código para excluir algum item
    public function delete(Request $req) {

        $Produto = Produtos::find($req->id);

        $Produto->delete();

        return response("Apagado com sucesso!");
    }

}
