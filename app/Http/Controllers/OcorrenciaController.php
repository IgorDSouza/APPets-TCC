<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a view
        $ocorrencias = Ocorrencia::all();
        return View("site.conteudo",['ocorrencias' => $ocorrencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View("site.ocorrencias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ocorrencia::create([
            'usuario_id' => session('id'),
            'titulo_ocorrencia' => $request['titulo_ocorrencia'],
            'conteudo_solucao' => $request['conteudo_solucao'],
            'tipo_ocorrencia' => $request['tipo_ocorrencia']
        ]);

        return redirect()->route('ocorrencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ocorrencia = Ocorrencia::find($id);
        return view('site.ocorrencias.edit',['ocorrencia' => $ocorrencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //atualiza os dados de uma linha no meu banco

        $ocorrencia = Ocorrencia::find($id);
        $ocorrencia->fill($request->toArray());
        $ocorrencia->save();

        return redirect()->route('ocorrecia.conteudos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Remove uma linha do banco de dados
        $ocorrencia = Ocorrencia::find($id);
        $ocorrencia->delete();
        return redirect()->route('ocorrecia.conteudos');
    }
}
