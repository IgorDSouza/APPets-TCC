@extends('layout.default')
@push('links')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPets</title>
    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/spacing.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/colors.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/cardsConteudo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/modal.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/conteudo.css')}}">
  <!--bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush
@section('content')
  <nav class="navbar navbar-expand-lg sticky-top "> 
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="color: rgb(45, 206, 80);
      ;"> <img style="width: 50px;" src="imgHome/iconLogin.png" alt="icone appets"> Appets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="justify-content: center;
      " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ocorrências
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-toggle="modal" href="#Envenenamento" role="button">Envenenamento</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Queda">Queda</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Briga">Briga</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Afogamento">Afogamento</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Asfixia">Asfixia</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Atropelamento">Atropelamento</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Queimadura">Queimadura</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Choque">Choque Elétrico</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Vomito">Vomito e Diarréia</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Picada">Picada de Insetos</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Intoxicação">Intoxicação Externa</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal"  role="button"href="#Cortes">Cortes Profundos</a></li>

            </ul>
          </li>
        </ul>
        <a style="width: 121.797px;"> </a>
      </div>
    </div>
  </nav>
    <div  class="page-home">
   
      <header>
        
          <section class="jumbotron " id="#home">
            <div class=" height-jumbotron ">
                  <img id="imgJumboCont" src="imgConteudo/icon.png"  alt="" >
                    <div>
                      <h1>Ocorrências </h1>
                    </div>
        </section>
      </header>
      <main>
        <a href="{{route('ocorrencia.create')}}" id="ocorrenciaButton" class="mt-4 btn btn-outline-primary">Adicionar Ocorrência</a>
        <section class="cards">
          @foreach ($ocorrencias as $ocorrencia)
          <div class="card">
            <a data-bs-toggle="modal"  role="button" href="{{'#ocorrencia'.$ocorrencia->id}}" >
              <div class="imgCard">
                <img class="d-block m-l-r borda " src="{{URL::asset('imgConteudo/envenenamento.png')}}"  alt="Imagem de capa do card" > 
              </div> 
            {{$ocorrencia->titulo_ocorrencia}} 
          </a>
         </div>
          @endforeach
            
       
      </section>
    </main>
      
    <section class="modais">
      @foreach ($ocorrencias as $ocorrencia)
      <div class="modal fade" id="ocorrencia{{$ocorrencia->id}}" aria-hidden="true" aria-labelledby="{{$ocorrencia->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent" > 
              <h2>{{$ocorrencia->titulo_ocorrencia}}</h2>

                     <p> {{$ocorrencia->conteudo_solucao}}</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div> 
      @endforeach
    </section>
    @push('scripts')
    @if(session('tutor')!=null && session('tutor')!='' )                  
      <script> 
        document.getElementById("ocorrenciaButton").style.display = "block";
      </script>
     @endif
     @endpush
  @endsection