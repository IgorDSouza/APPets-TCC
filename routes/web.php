<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OcorrenciaController;
use App\Models\Ocorrencia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CadastroController::class, 'index'])->name('site.home');


Route::get('/error', [CadastroController::class, 'index'])->name('site.erro');


Route::post('/store', [CadastroController::class, 'storeTutor']);

Route::post('/storeimg', [CadastroController::class, 'storeimg']);

Route::post('/addInfo', [CadastroController::class, 'addInfo']);

Route::post('/storePet/{?id}', [CadastroController::class, 'storePet'])->name('site.storePet');

Route::get('/logout', [CadastroController::class,'logout'])->name('site.logout');

Route::post('/login', [CadastroController::class, 'login']);

Route::get('/tutor/{id?}', [CadastroController::class, 'tutor'])->name('site.tutor');


Route::prefix('pet')->group(function(){
    //----------------------------Remedios------------------------------------------------------------------

    Route::get('/{id?}/{rota}', [PetController::class, 'pet'])->name('site.pet');

    Route::post('{id}/remedio/storeRemedio', [PetController::class, 'storeRemedio']);

    Route::get('{idPet}/remedio/deleteRemedio/{id}', [PetController::class, 'deleteRemedio']);

    Route::post('{idPet}/remedio/editRemedio/{id}', [PetController::class, 'editRemedio']);

//----------------------------Cuidados---------------------------------------------------------------------

    Route::post('{id}/remedio/storeCuidado', [PetController::class, 'storeCuidado']);

    Route::get('{idPet}/remedio/deleteCuidado/{id}', [PetController::class, 'deleteCuidado']);
    
    Route::post('{idPet}/remedio/editCuidado/{id}', [PetController::class, 'editCuidado']);

//----------------------------Agenda---------------------------------------------------------------------

    Route::get('{id}/agenda', [PetController::class, 'agenda']);


    Route::post('{id}/agenda/storeCompromisso', [PetController::class, 'storeCompromisso']);

    Route::get('{idPet}/agenda/deleteCompromisso/{id}', [PetController::class, 'deleteCompromisso']);
    
    Route::post('{idPet}/agenda/editCompromisso/{id}', [PetController::class, 'editCompromisso']);


    Route::post('{id}/informacoes/storePet/{Petid}', [CadastroController::class, 'storePet'])->name('site.storePet');

});



Route::prefix('ocorrencia')->group(function(){
    Route::get('/conteudo', [OcorrenciaController::class, 'index'])->name('ocorrecia.conteudos');
    Route::get('', [OcorrenciaController::class, 'index'])->name('ocorrencia.index');
    Route::get('/create', [OcorrenciaController::class, 'create'])->name('ocorrencia.create');
    Route::post('/store', [OcorrenciaController::class, 'store'])->name('ocorrencia.store');
    Route::get('/{id}/delete',[OcorrenciaController::class,'destroy'])->name('ocorrencia.delete');
    Route::get('/{id}/edit',[OcorrenciaController::class,'edit'])->name('ocorrencia.edit');
    Route::post('/{id}/update',[OcorrenciaController::class,'update'])->name('ocorrencia.update');
});



Route::fallback(function(){
    return view('site.pageNotFound');
});


