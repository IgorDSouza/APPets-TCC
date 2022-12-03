<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
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

Route::post('/storePet', [CadastroController::class, 'storePet'])->name('site.storePet');

Route::get('/logout', [CadastroController::class,'logout'])->name('site.logout');

Route::post('/login', [CadastroController::class, 'login']);

Route::get('/tutor/{id?}', [CadastroController::class, 'tutor'])->name('site.tutor');

Route::get('/pet/{id?}', [CadastroController::class, 'pet'])->name('site.pet');



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


