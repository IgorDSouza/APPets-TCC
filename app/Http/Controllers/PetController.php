<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Remedio;
use App\Models\Cuidado;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function pet($id){

        $pet = Pet::find($id);

        
        $remedios = DB::table('remedio')
        ->join('pet', 'remedio.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('remedio.id','remedio.nome','remedio.dosagem','remedio.periodo')->get();


        $cuidados = DB::table('cuidado')
        ->join('pet', 'cuidado.animal_id', '=' , 'pet.id')->where('pet.id',$pet->id)
        ->select('cuidado.id','cuidado.observacao')->get();


        return view('site.pet',["remedios"=>$remedios, "cuidados"=>$cuidados, "pet"=>$pet]);

    }

    public function storeRemedio(Request $request, $id){
        
        $remedio = new Remedio;
        $remedio->nome = $request->nomeRemedio;
        $remedio->dosagem = $request->dosagem;
        $remedio->periodo = $request->periodo;
        $remedio->animal_id = $id;


        $remedio->save();

        return redirect()->route('site.pet',['id'=>$id]);

    }
    public function deleteRemedio(Request $request, $idPet, $id){
        
        $remedio = Remedio::find($id);


        $remedio->delete();

        return redirect()->route('site.pet',['id'=>$idPet]);

    }

    public function edit(Request $request, $idPet, $id){
        
        $remedio = Remedio::find($id);


        $remedio->delete();

        return redirect()->route('site.pet',['id'=>$idPet]);

    }


    public function storeCuidado(Request $request, $id){
        
        $cuidado = new Cuidado;
        $cuidado->animal_id = $id;
        $cuidado->observacao = $request->cuidado;
        $cuidado->save();

        return redirect()->route('site.pet',['id'=>$id]);

    }



   
}
