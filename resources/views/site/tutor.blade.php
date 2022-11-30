@extends('layout.default')
@push('links')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/spacing.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/colors.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/cardsUsuario.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/usuario.css')}}">
     <!--bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div style="backdrop-filter:brightness(0.8)">

    <nav class="navbar navbar-expand-lg sticky-top "> 
        <div class="container-fluid">
          <a class="navbar-brand" href='' style="color: rgb(45, 206, 80);
          ;"> <img style="width: 50px;" src="{{URL::asset('imgHome/iconLogin.png')}}" alt="icone appets"> Appets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: center;
          " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('site.home')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pets">Pets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#agenda">Agenda</a>
              </li>
              <li class="nav-item linkTutor" >
                <a class="nav-link">Area do Tutor</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" href="{{route('site.logout')}}">Sair</a>
              </li>
            </ul>
            <a style="width: 121.797px;"> </a>

          </div>
        </div>
      </nav>
    <div class="tutorInfo" >
        <img class="circleImg" src="../wwwroot/img/imgUsuario/tutor.jpg" alt="IMAGEM TUTOR">
        <div class="tutorTitle">         
            <H1 >Ola {{session('tutor');}} </H1>
            <h2>Como estão nossos 'aumigos' hoje?</h2>
        </div>
   </div>

   <div class="pets" id="pets">
    <section class="cards">
      @isset($pets)
        
        @if($pets)
        @foreach($pets as $pet)
        <div class="card">
       
           <a><div class="imgCard"><img src="../wwwroot/img/imgUsuario/pet1.jpg"  alt="Imagem do pet" > </div> 
          {{$pet->nome}}</a>
    
        </div>
      @endforeach
        @endif
      @endisset
  
      
      <form method="post" action="/storePet">
                  @csrf
                  <label for="usuario"> Nome</label>
                      <input type="text" name="nome" required>
                      <label for="dataNascto"> Data Nascimento</label>
                      <input type="date" name="dataNascto">
                      <label for="peso">Peso</label>
                      <input type="text" name="peso">
                      <label for="raca">Raça</label>
                      <input type="text" name="raca" required>
                      <label for="comprimento">comprimento</label>
                      <input type="text" name="comprimento" >  
                      <label for="altura">altura</label>
                      <input type="text" name="altura" >                    
                      <input type="submit" value="Cadastrar Pet" class="btn-primary p10lr" style="margin-bottom: 10px;">                      
                  </form> 
</div>
                  

    <div id = 'agenda' class="agendaTitle"><h1>Agenda</h1></div>
   <div class="d-flex justify-content-center">   

        <div class="compromissos"></div>
     
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
@endsection