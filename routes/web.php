<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
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

Route::get('/{id?}', [CadastroController::class, 'index'])->name('site.home');

Route::get('/error', [CadastroController::class, 'index'])->name('site.erro');


Route::post('/store', [CadastroController::class, 'storeTutor']);

Route::post('/storePet/{id}', [CadastroController::class, 'storePet'])->name('site.storePet');


Route::get('/logout', [CadastroController::class,'logout'])->name('site.logout');


Route::post('/login', [CadastroController::class, 'login']);

Route::get('/tutor/{id}', [CadastroController::class, 'tutor'])->name('site.tutor');









Route::fallback(function(){
    return view('site.pageNotFound');
});


