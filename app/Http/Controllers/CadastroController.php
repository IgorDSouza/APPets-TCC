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
        $validacao = DB::table('usuarios')->where('login', $usuarioForm )->where('senha',$senhaForm)->first();
      
        return view('site.home',['validacao' => $validacao, 'id'=> $id]);
    }

    public function tutor($id){
        $tutor=Usuario::find($id);
        $pets = DB::table('pet')
        ->join('usuarios', 'pet.tutor_id', '=' , 'usuarios.id')
        ->select('pet.*')->get();
        

        return view('site.tutor',['tutor'=>$tutor,'pets'=>$pets]);
    }

}
