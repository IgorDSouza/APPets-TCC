@extends('layout.default')

@push("links")
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset ('css/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset ('css/spacing.css')}}">
    <link rel="stylesheet" href="{{URL::asset ('css/colors.css')}}">
    <link rel="stylesheet" href="{{URL::asset ('css/login.css')}}">
    <link rel="stylesheet" href="{{URL::asset ('css/pet.css')}}">
     <!--bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Area Tutor</title>
@endpush
@section('content')
    <div id='home' style="backdrop-filter:brightness(0.8)">

    <nav class="navbar navbar-expand-lg sticky-top "> 
        <div class="container-fluid">
          <a class="navbar-brand" href="/" style="color: rgb(45, 206, 80);
          ;"> <img style="width: 50px;" src="/imgHome/iconLogin.png" alt="icone appets"> Appets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: center;
          " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/tutor">Area Tutor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#home">Pet</a>
              </li>
              
              <li class="nav-item">
              <a class="nav-link" id="linkdrop" role="button" onclick="dropdown()">Tópicos <span style="font-size:15px; color:black;">⛛ </span>  </a>
              <div id='topicos'>

              </div>


              </li>

            </ul>
            <a style="width: 121.797px;"> </a>

          </div>
        </div>
      </nav>
    <div  style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
    <div class="imgCard" style="background-image: url('/imgUsuario/pets/{{$pet->foto}}') "></div>

        <div>         
            <H1 >{{ $pet->nome }}</H1>
        </div>
   </div>
   <div class="topicos">
        <div class="links">
            <a href="remedio">Remédios</a>
            <a href="cuidados">Cuidados</a>
            <a href="agenda">Agenda Pet</a> 
            <a href="informacoes">Informações Pet</a> 

        </div>
    
   </div>
   <div class="d-flex justify-content-center">   

        <div id="quadro" class="compromissos">
          @if($rota=="remedio")

             @include('site.pets.remedios')

          @elseif($rota=="agenda")

              @include('site.pets.agenda')

          @elseif($rota=="informacoes")

             @include('site.pets.informacoes')

          @elseif($rota=="cuidados")

              @include('site.pets.cuidados')

          @endif

          </div>
   </div>
   
   <div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top bgblury">
      <p class="col-md-4 mb-0">© 2022 Appets</p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
  
      <ul class="nav">
        <li class="nav-item"><a href="/" class="nav-link px-2 ">Home</a></li>
        <li class="nav-item"><a href="/ocorrencia/conteudo" class="nav-link px-2 ">Principais Ocorrências</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2">Sobre</a></li>
      </ul>
    </footer>

</div>
</div> 
<div class="modal fade" id="storeRemedio" aria-hidden="true" aria-labelledby="storeRemedio" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div id="form"> 
                  <img src="/imgUsuario/pets/iconeRemedio.png" alt ="icone appets">
                  <form method="post" action='remedio/storeRemedio'>
                  @csrf 
                  <h3>Remedios</h3>
                  <label for="nomeRemedio"> Nome</label><br>
                      <input type="text" name="nomeRemedio" required><br>
                      <label for="dosagem"> Dosagem(ML)</label><br>
                      <input type="number" name="dosagem" required><br>
                      <label for="periodo">Periodo</label><br>
                      <input type="text" name="periodo" required><br>
                      <input type="submit"  value="Adicionar Remedio" class="btn-primary p10lr" style="margin-bottom: 10px;">        
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="storeCuidado" aria-hidden="true" aria-labelledby="storeCuidado" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div id="form"> 
                  <img src="/imgUsuario/pets/iconeCuidados.png" alt ="icone appets">
                  <form method="post" action='cuidados/storeCuidado'>
                  @csrf 
                  <h3>Cuidados</h3>
                  <label for="cuidado"> Descreva o Cuidado Especial</label><br>
                      <input type="text" name="cuidado" required><br>
                      <input type="submit"  value="Adicionar Cuidado" class="btn-primary p10lr" style="margin-bottom: 10px;">        
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="storeCompromisso" aria-hidden="true" aria-labelledby="storeCompromisso" tabindex="-2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div id="form"> 
                  <img src="/imgUsuario/pets/iconeCuidados.png" alt ="icone appets">
                  <form method="post" action='agenda/storeCompromisso'>
                  @csrf 
                  <h3>Compromissos</h3>
                  <label for="compromisso"> Descreva o Compromisso</label><br>
                      <input type="text" name="compromisso" required><br>
                      <label for="data"> informe a data</label><br>
                      <input type="date" name="data" required><br>
                      <label for="hora"> informe a Hora</label><br>
                      <input type="time" name="hora" required><br>
                      <label for="nota"> Alguma observação?</label><br>
                      <input type="text" name="nota" ><br>
                      <input type="submit"  value="Adicionar Compromisso" class="btn-primary p10lr" style="margin-bottom: 10px;">
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>
@push('scripts')

    <script> 
     

      function dropdown(){ 
      var topicos=document.getElementById('topicos'); 
      
        if(topicos.innerHTML != "" ){
        topicos.innerHTML = "";
      }else{
        topicos.innerHTML="<a class='nav-link' href='remedio' >Remedios</a><a class='nav-link' href='cuidados' >Cuidados</a> <a class='nav-link' href='agenda' >Agenda</a> <a class='nav-link' href='informacoes' >Informações do pet</a> ";
      }
    }

      

    </script>

@endpush


@endsection
