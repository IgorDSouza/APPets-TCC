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

        
        $remedios = DB::table('remedio')
        ->join('pet', 'remedio.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('remedio.id','remedio.nome','remedio.dosagem','remedio.periodo')->get();


        $cuidados = DB::table('cuidado')
        ->join('pet', 'cuidado.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('cuidado.id','cuidado.observacao')->get();


        return view('site.pet',["remedios"=>$remedios, "cuidados"=>$cuidados, "pet"=>$pet,"rota"=>$rota]);

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

        return redirect()->route('site.pet',['id'=>$id, "rota"=>'remedio']);

    }
    public function deleteCuidado(Request $request, $idPet, $id){
        
        $cuidado = Cuidado::find($id);


        $cuidado->delete();

        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'remedio']);

    }

    public function editCuidado(Request $request, $idPet, $id){
        
        $cuidado = Cuidado::find($id);

        $cuidado->observacao = $request->cuidado;
      
        $cuidado->save();


        return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'remedio']);

    }
//----------------------------Agenda---------------------------------------------------------------------

public function agenda($id){

    dd($id);

    $pet = Pet::find($id);

    $compromissos = DB::table('comprimisso')
     ->join('pet', 'comprimisso.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
     ->select('comprimisso.compromisso','comprimisso.data','comprimisso.hora','comprimisso.nota','pet.nome')->limit(1)->get();


    return view('site.pet',["pet"=>$pet,"rota"=>'agenda',"compromisso"=>$compromissos]);

}

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
        
    $compromisso = Cuidado::find($id);


    $compromisso->delete();

    return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'agenda']);

}
public function editCompromisso(Request $request, $idPet, $id){
        
    $compromisso = Compromisso::find($id);

    $compromisso->animal_id = $id;
    $compromisso->data = $request->data;
    $compromisso->hora = $request->hora;
    $compromisso->nota = $request->nota;
    $compromisso->compromisso = $request->compromisso;
    $compromisso->save();


    return redirect()->route('site.pet',['id'=>$idPet, "rota"=>'agenda']);

}
}
    