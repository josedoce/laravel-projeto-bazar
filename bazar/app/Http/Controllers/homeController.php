<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrinho;
use App\Models\produtos;
use App\Models\cliente;

class homeController extends Controller
{
    public function index(){
        
        // $carrinho_cliente = cliente::find(1);
        // if($carrinho_cliente != null){
        //     $consumo = $carrinho_cliente->carrinho;
        // }
        $fulano = session('usuario');
        $status = $fulano != null?true:false;
        return view('index', ['logado'=>$status, 'usuario'=>$fulano]);   
    }

    
}
