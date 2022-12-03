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
    <div style="backdrop-filter:brightness(0.8)">

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
                <a class="nav-link" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pets">Pets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#agenda">Area Tutor</a>
              </li>

            </ul>
            <a style="width: 121.797px;"> </a>

          </div>
        </div>
      </nav>
    <div style="text-align: center;">
        <img class="circleImg" src="/imgUsuario/pets/{{$pet->foto}}" alt="IMAGEM PET">
        <div>         
            <H1 >{{ $pet->nome }}</H1>
        </div>
   </div>
   <div class="topicos">
        <div class="links">
            <a href="remedio">Remédios e Cuidados</a>
            <a href="agenda">Agenda Pet</a> 
            <a href="">Informações Pet</a> 
            <a href="">Ferramentas</a> 

        </div>
    
   </div>
   <div class="d-flex justify-content-center">   

        <div class="compromissos">
          @if($rota=="remedio")

          @include('site.pets.remedioseCuidados');

          @elseif($rota=="agenda")

          @include('site.pets.agenda')

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
        <li class="nav-item"><a href="#home" class="nav-link px-2 ">Home</a></li>
        <li class="nav-item"><a href="#ps" class="nav-link px-2 ">Principais Ocorrências</a></li>
        <li class="nav-item"><a href="#maps" class="nav-link px-2 ">Veterinários na Região</a></li>
        <li class="nav-item"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="nav-link px-2">Login</a></li>
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
                      <input type="button" value="Cuidados" class=" btn-primary p10lr" data-bs-target="#storeCuidado" data-bs-toggle="modal" data-bs-dismiss="modal">           
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
                  <form method="post" action='remedio/storeCuidado'>
                  @csrf 
                  <h3>Cuidados</h3>
                  <label for="cuidado"> Descreva o Cuidado Especial</label><br>
                      <input type="text" name="cuidado" required><br>
                      <input type="submit"  value="Adicionar Cuidado" class="btn-primary p10lr" style="margin-bottom: 10px;">
                      <input type="button" value="Remedios" class=" btn-primary p10lr" data-bs-target="#storeRemedio" data-bs-toggle="modal" data-bs-dismiss="modal">           
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
                      <input type="text" name="nota" required><br>
                      <input type="submit"  value="Adicionar Compromisso" class="btn-primary p10lr" style="margin-bottom: 10px;">
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>
@endsection

