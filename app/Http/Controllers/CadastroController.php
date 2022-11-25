<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pet;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{
    public function index(Request $request){  
        dd($request);
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

    
    public function login(Request $request, Usuario $user){   
        $usuarioForm = $request->usuario;
        $senhaForm = $request->senha;
        $senhaForm = md5($senhaForm);
        $validacao = DB::table('usuarios')->where('login', $usuarioForm )->where('senha',$senhaForm)->first();

        session(['tutor'=>$validacao->login]);
        session(['id'=>$validacao->id]);
              
        return view('site.home',['user' => $validacao->id]);
    }

    public function tutor(){
        $pets = DB::table('pet')
        ->join('usuarios', 'pet.tutor_id', '=' , 'usuarios.id')
        ->select('pet.*')->get();

       

        
        return view('site.tutor',['pets'=>$pets]);
    }

    public function storePet($id,Request $request ){
        $pet = new Pet;
        $pet->tutor_id = $id;
        $pet->nome = $request->nome;
        $pet->idade = $request->dataNascto;
        $pet->raca = $request->raca;
        $pet->altura = $request->altura;
        $pet->comprimento = $request->comprimento;
        $pet->save();
        return redirect()->route('site.tutor',session('id'));
    }

    public function logout(){
        session_destroy();



        return view('site.home');
    }

}
