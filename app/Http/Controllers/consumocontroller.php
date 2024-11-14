<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Htpp;
use Illuminate\Support\Facades\Http;

class consumocontroller extends ProdutosController

{
    public function __invoke()
    {
        return Http::get(url: 'http://127.0.0.1:8000/api/produtos');
    }
}