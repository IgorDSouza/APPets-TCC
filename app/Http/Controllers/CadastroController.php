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

        $validacao1 = DB::table('usuarios')->where('login', $request->usuario )->first();

        $validacao2 = DB::table('usuarios')->where('email', $request->email )->first();


        if($validacao1 != null || $validacao2 != null){

            $erro = 'usuario';
            $retorno = redirect()->route('site.home',['erro'=>$erro]);

        }else{
                $senha1=$request->senha;
                $senha2=$request->senhaConfirma;
            if($senha2 == $senha1){
                $usuario = new Usuario;
                $usuario->login = $request->usuario;
                $usuario->email = $request->email;
                $usuario->senha = md5($request->senha);
                $usuario->permissao = $request->permissao;
                $usuario->save();

                $retorno = redirect()->route('site.home');


                }else{
                    $erro ='senha';
                    $retorno = redirect()->route('site.home',['erro'=>$erro]);

                }
        }
    return $retorno;

    }

    public function addInfo(Request $request){  

        $usuarioid = session('id');

        $usuario= Usuario::find($usuarioid);

        $usuario->nome = $request->nome;
        $usuario->pais = $request->pais;
        $usuario->uf = $request->estado;
        $usuario->cidade = $request->cidade;
        $usuario->bairro = $request->bairro;
        $usuario->numero = $request->numero;
        $usuario->complemento = $request->complemento;
        $usuario->rua = $request->rua;
        $usuario->save();




        return redirect()->route('site.tutor',session('id'));

    }


    public function storeimg(Request $request){  
        $usuarioid = session('id');

        $usuario= Usuario::find($usuarioid);
        
        if($request->hasFile('foto') && $request->file('foto')->isValid()){

            $requestImage= $request->foto;

            $extension = $requestImage->extension();

            if($usuario->foto !== null){
                $imageName = $usuario->foto;

            }else{

                $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).'.'.$extension;

            }

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

        if($validacao == null){
            
            $erro ='invalido';
            $retorno = redirect()->route('site.home',['erro'=>$erro]);

        }else{
        session(['tutor'=>$validacao->login]);                      
        session(['id'=>$validacao->id]);
        session(['foto'=>$validacao->foto]);
        session(['permissao'=>$validacao->permissao]);
            $retorno = redirect()->route('site.home');
        }
              
        return $retorno;
    }


    public function tutor(){
        
        $usuario = Usuario::find(session('id'));
        if($usuario->nome != null){
            session(['tutor'=>$usuario->nome]);

        }

        $pets = DB::table('pet')
        ->join('usuarios', 'pet.tutor_id', '=' , 'usuarios.id')->where('usuarios.id',session('id'))
        ->select('pet.*')->get();

        $agenda = [];

        $i=0;

        foreach($pets as $pet){

        $compromissos = DB::table('comprimisso')
         ->join('pet', 'comprimisso.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id )->where('comprimisso.data','>=',getdate())
         ->select('comprimisso.compromisso','comprimisso.data','comprimisso.hora','comprimisso.nota','pet.nome')->limit(2)->get();

            array_push($agenda,$compromissos);

        }
        

        
        return view('site.tutor',['pets'=>$pets,'agenda'=>$agenda]);
    }

    public function storePet(Request $request){
       
            $pet = new Pet;
        
        $pet->tutor_id = session('id');
        $pet->nome = $request->nome;
        $pet->idade = $request->dataNascto;
        $pet->raca = $request->raca;
        $pet->altura = $request->altura;
        $pet->comprimento = $request->comprimento;
        $pet->peso = $request->peso;


        if($request->hasFile('foto') && $request->file('foto')->isValid()){

            $requestImage= $request->foto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).'.'.$extension;

            $requestImage->move(public_path("imgUsuario/pets"),$imageName);
            
            $pet->foto = $imageName;
        }

        $pet->save();

        return redirect()->route('site.tutor');
    }




    public function logout(){
        session()->flush();



        return redirect()->route('site.home');
    }

}
