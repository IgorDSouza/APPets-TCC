<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Remedio;
use App\Models\Cuidado;
use App\Models\Compromisso;

use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function pet($id,$rota){

        $pet = Pet::find($id);

        if($rota == 'remedio'){
            $remedios = DB::table('remedio')
        ->join('pet', 'remedio.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('remedio.id','remedio.nome','remedio.dosagem','remedio.periodo')->get();

        $retorno = view('site.pet',["remedios"=>$remedios,"pet"=>$pet,"rota"=>$rota]);
        }

       else if($rota == 'cuidados'){


        $cuidados = DB::table('cuidado')
        ->join('pet', 'cuidado.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('cuidado.id','cuidado.observacao')->get();

        $retorno = view('site.pet',["cuidados"=>$cuidados, "pet"=>$pet, "rota"=>'cuidados']);

        }
        

        else if($rota == 'agenda'){
            $compromissos = DB::table('comprimisso')
            ->join('pet', 'comprimisso.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
            ->select('comprimisso.id','comprimisso.compromisso','comprimisso.data','comprimisso.hora','comprimisso.nota','pet.nome')->limit(10)->get();

            
       
           $retorno = view('site.pet',["pet"=>$pet,"rota"=>'agenda',"compromissos"=>$compromissos]);

        }

        else if($rota == 'informacoes'){
          
           $retorno = view('site.pet',["pet"=>$pet,"rota"=>'informacoes']);
        }


        
                    return $retorno;  

    }

    public function deletePet(Request $request, $id){
        $pet = Pet::find($id);

        $pet->delete();

        return redirect()->route('site.tutor');



    }


    public function storeRemedio(Request $request, $id){
        
        $remedio = new Remedio;
        $remedio->nome = $request->nomeRemedio;
        $remedio->dosagem = $request->dosagem;
        $remedio->periodo = $request->periodo;
        $remedio->animal_id = $id;


        $remedio->save();

        return redirect()->route('site.pet',['id'=>$id, "rota"=>'remedio']);

    }
    public function deleteRemedio(Request $request, $idPet, $id){
        
        $remedio = Remedio::find($id);


        $remedio->delete();

        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'remedio']);

    }


    public function editRemedio(Request $request, $idPet, $id){
        
        $remedio = Remedio::find($id);


        $remedio->nome = $request->nomeRemedio;
        $remedio->dosagem = $request->dosagem;
        $remedio->periodo = $request->periodo;
        $remedio->save();


        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'remedio']);

    }
//----------------------------Cuidados---------------------------------------------------------------------


    public function storeCuidado(Request $request, $id){
        
        $cuidado = new Cuidado;
        $cuidado->animal_id = $id;
        $cuidado->observacao = $request->cuidado;
        $cuidado->save();

        return redirect()->route('site.pet',['id'=>$id, "rota"=>'cuidados']);

    }
    public function deleteCuidado(Request $request, $idPet, $id){
        
        $cuidado = Cuidado::find($id);


        $cuidado->delete();

        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'cuidados']);

    }

    public function editCuidado(Request $request, $idPet, $id){
        
        $cuidado = Cuidado::find($id);

        $cuidado->observacao = $request->cuidado;
      
        $cuidado->save();


        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'cuidados']);

    }
//----------------------------Agenda---------------------------------------------------------------------

public function storeCompromisso(Request $request, $id){

    $compromisso = new Compromisso;
        $compromisso->animal_id = $id;
        $compromisso->data = $request->data;
        $compromisso->hora = $request->hora;
        $compromisso->nota = $request->nota;
        $compromisso->compromisso = $request->compromisso;
        $compromisso->save();

   

      return redirect()->route('site.pet',['id'=>$id,'rota'=>'agenda']);

}
public function deleteCompromisso(Request $request, $idPet, $id){
        
    $compromisso = Compromisso::find($id);

    $compromisso->delete();

    return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'agenda']);

}
public function editCompromisso(Request $request, $idPet, $id){
        
    $compromisso = Compromisso::find($id);

    $compromisso->animal_id = $idPet;
    $compromisso->data = $request->data;
    $compromisso->hora = $request->hora;
    $compromisso->nota = $request->nota;
    $compromisso->compromisso = $request->compromisso;
    $compromisso->save();


    return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'agenda']);

}

public function updatePet(Request $request,$id ){
       
    $pet = Pet::find($id);

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

return redirect()->route('site.tutor',session('id'));
}
}
    