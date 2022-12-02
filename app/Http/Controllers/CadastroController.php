<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pet;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{
    public function index(){  
        $ocorrencias = Ocorrencia::all()->take(5);
        return view('site.home',['ocorrencias'=>$ocorrencias]);
    }
    public function conteudo(){  
        return view('site.conteudo');
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

    public function storeimg(Request $request){  
        $usuarioid = session('id');

        $usuario= Usuario::find($usuarioid);
        
        if($request->hasFile('foto') && $request->file('foto')->isValid()){

            $requestImage= $request->foto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).'.'.$extension;


            $requestImage->move(public_path("imgUsuario/usuarios"),$imageName);
            
            $usuario->foto = $imageName;
        }

        $usuario->save();

        session(['foto'=>$usuario->foto]);


    return redirect()->route('site.tutor',session('id'));
    }

    
    public function login(Request $request, Usuario $user){   
        $usuarioForm = $request->usuario;
        $senhaForm = $request->senha;
        $senhaForm = md5($senhaForm);
        $validacao = DB::table('usuarios')->where('login', $usuarioForm )->where('senha',$senhaForm)->first();

        session(['tutor'=>$validacao->login]);
        session(['id'=>$validacao->id]);
        session(['foto'=>$validacao->foto]);

              
        return view('site.home');
    }


    public function tutor(){
        
        $pets = DB::table('pet')
        ->join('usuarios', 'pet.tutor_id', '=' , 'usuarios.id')->where('usuarios.id',session('id'))
        ->select('pet.*')->get();

        
        return view('site.tutor',['pets'=>$pets]);
    }

    public function storePet(Request $request ){
        $pet = new Pet;
        $pet->tutor_id = session('id');
        $pet->nome = $request->nome;
        $pet->idade = $request->dataNascto;
        $pet->raca = $request->raca;
        $pet->altura = $request->altura;
        $pet->comprimento = $request->comprimento;

        if($request->hasFile('foto') && $request->file('foto')->isValid()){

            $requestImage= $request->foto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).'.'.$extension;

            $requestImage->move(public_path("imgUsuario/pets"),$imageName);
            
            $pet->foto = $imageName;
        }

        $pet->save();

        return redirect()->route('site.tutor',session('id'));
    }

    public function logout(){
        session()->flush();



        return redirect()->route('site.home');
    }

}
