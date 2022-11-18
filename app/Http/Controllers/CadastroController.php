<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{
    public function index(){       
        return view('site.home');
    }


    public function storeTutor(Request $request){  
        $senha1=$request->senha;
        $senha2=$request->senhaConfirma;

    if($senha2 == $senha1){
        $usuario = new Usuario;
        $usuario->login = $request->usuario;
        $usuario->email = $request->email;
        $usuario->senha = md5($request->senha);
        $usuario->save();
        echo '<script> window.alert("Cadastrado com sucesso")</script>';  

   }else{

    echo '<script> window.alert("As senhas não coincidem")</script>';
    }

    return view('site.home');
    }

    
    public function login(Request $request){   
        $usuarioForm = $request->usuario;
        $senhaForm = $request->senha;
        $senhaForm = md5($senhaForm);
        $usuario = DB::select('select * from usuarios where login = :usuario',['usuario'=>$usuarioForm]);
        $senha = DB::select('select * from usuarios where senha = :senha',['senha'=>$senhaForm]);
        
       
        if($usuario[0]->login == $usuarioForm && $usuario[0]->senha == $senha ){
            echo "<script> window.alert('logado') </script>";
        }
         else{
            echo "<script> window.alert('erro') </script>";

         }
        return view('site.home');
    }

}
