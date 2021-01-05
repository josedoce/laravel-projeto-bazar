<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrinho;
use App\Models\produtos;
use App\Models\cliente;

class usuarioController extends Controller
{
    public function usuario($acao){
        if($acao != 'login' and $acao != 'registro'){
            return redirect()->route('home');
        }
        if($acao === 'login'){
            return view('login');
        }
        if($acao === 'registro'){
            return view('registro');
        }
    }
    public function logar(Request $request){
        
        $email = $request->email;
        $senha = $request->senha;
        if(empty($email) || empty($senha)){
            return redirect('/usuario/login');
        }
        $confirmacao = cliente::where('email',$email)->first();
        $carrinho = $confirmacao->carrinho;
        
        if($senha != $confirmacao->senha){
            return redirect('/usuario/registro');
        }
        
        
        if($confirmacao != null){
            //usuario setado no session
            session(['usuario'=>[
                'nome'=>$confirmacao->nome,
                'id'=>$confirmacao->id,
                'carrinho'=>count($carrinho)
            ]]);
            
            return redirect()->route('home');
        }
        return redirect()->route('usuario');
        
    }
    
    public function logout(){
        session()->forget('usuario');
        return redirect()->route('home');
    }
    public function carrinho(){
        $usuario = session('usuario');
        return 'carrinho de '.$usuario['nome'].' possui '.$usuario['carrinho']. ' produtos.';
    }
}
