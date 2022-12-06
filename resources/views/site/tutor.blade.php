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
          <a class="navbar-brand" href='{{route('site.home')}}' style="color: rgb(45, 206, 80);
          ;"> <img style="width: 50px;" src="{{URL::asset('imgHome/iconLogin.png')}}" alt="icone appets"> Appets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: center;
          " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('site.home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pets">Pets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#agenda">Agenda</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" href="{{route('site.logout')}}">Sair</a>
              </li>
            </ul>
            <a style="width: 121.797px;"> </a>

          </div>
        </div>
      </nav>
    <div class="tutorInfo" id=#inicio >
        <img class="circleImg" src="../imgUsuario/usuarios/@if(session('foto') == null){{"usuariopadrao.png"}}@else{{session('foto')}} @endif" alt="IMAGEM TUTOR">

        <div>
        

          <div id="alteracoes" style="display:none; background-color: #447e605c;">
            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="color:black; border:1px solid black; border-radius:10px;" >Alterar Imagem</a>
            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle2" role="button"  style="color:black;border:1px solid black; border-radius:10px;">Adicionar mais informações</a>
          </div> 
        </div>
        <a class="ocorrenciaEditButton mb-4" onclick='showHide()' style=" color: green; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>  
        <div class="tutorTitle">         
            <H1 >Olá {{session('tutor');}} </H1>
            <h2>Como estão nossos 'aumigos' hoje?</h2>
        </div>
   </div>

   <div class="pets" id="pets">
    <section id='petcards' class="cards">
      @isset($pets)
        
        @if($pets)
        @foreach($pets as $pet)
        <div class="card">
       
       
           <a href="/pet/{{$pet->id}}/remedio"><div class="imgCard"><img src="../imgUsuario/pets/{{$pet->foto}}"  alt="Imagem do pet"  > </div> 
          {{$pet->nome}}</a>
          <div><a class="ocorrenciaDelButton mb-4" href="/{{$pet->id}}/deletePet" style=" color: #dc3545; cursor: pointer; font-size:18px"><i class="fa-solid fa-trash"></i></a>

          <a class="ocorrenciaEditButton mb-4" href="/pet/{{$pet->id}}/informacoes"style=" color: #ffc107; cursor: pointer; font-size:18px"><i class="fa-solid fa-pen"></i></a></div>
        </div>
      @endforeach
        @endif
      @endisset
</section>
      <div onclick="addPetForm()" id="plus" role="button"><img src="../imgUsuario/addPet.png" alt=""></div>
      
      
      <form id="addPet" method="post" action="/storePet " enctype="multipart/form-data">
                  @csrf
                  <h3>Adicionar novo Pet</h3>
                  <label for="usuario"> Nome</label>
                      <input type="text" name="nome" required/>
                      <label for="dataNascto"> Data Nascimento</label>
                      <input type="date" name="dataNascto">
                      <label for="peso">Peso</label>
                      <input type="text" name="peso">
                      <label for="raca">Raça</label>
                      <input type="text" name="raca" required/>
                      <label for="comprimento">comprimento</label>
                      <input type="text" name="comprimento" >  
                      <label for="altura">altura</label>
                      <input type="text" name="altura" >  
                      <label for="foto">Foto do Pet</label>
                      <input type="file" name="foto" required>                   
                      <input  type="submit" value="Cadastrar Pet" class="btn-primary p10lr" style="margin-bottom: 10px;"> 
                      <input onclick="hidePlus()"type="button" value="Fechar" class=" btn-primary p10lr">
                     
       </form> 
</div>
                  

    <div id = 'agenda' class="agendaTitle"><h1>Agenda</h1></div>
   <div class="d-flex justify-content-center">   

        <div class="compromissos">
        @if($agenda != null)  
          
        
          @foreach($agenda as $compromissos)
          @if($compromissos->isEmpty())
          <h3>Nenhum compromisso encontrado!</h3>
          @endif

              @foreach($compromissos as $compromisso)
              


                  <div style="width:100%; font-size:18px; text-align:center;">&nbsp;&nbsp;<strong>Pet:</strong> {{$compromisso->nome}}<strong>&nbsp;&nbsp;&nbsp;&nbsp;Compromisso:</strong> {{$compromisso->compromisso}}<strong>&nbsp;&nbsp;&nbsp;&nbsp;Data:</strong> {{$compromisso->data}}<strong>&nbsp;&nbsp;&nbsp;&nbsp;Hora:</strong> {{$compromisso->hora}}</div><br>

              @endforeach
          @endforeach
          @else

          <h3>Nenhum compromisso encontrado!</h3>
          @endif
          
     </div>
   </div>

  
   

   
   
</div>
<div style="backdrop-filter:brightness(0.8);">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top bgblury">
    <p class="col-md-4 mb-0">© 2022 Appets</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav">
      <li class="nav-item"><a href="/" class="nav-link px-2 ">Home</a></li>
      <li class="nav-item"><a href="/ocorrencia/conteudo" class="nav-link px-2 ">Principais Ocorrências</a></li>
      <li class="nav-item"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="nav-link px-2">Login</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2">Sobre</a></li>
    </ul>
  </footer>

</div>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              <div id="form"> 
              
                  <form method="POST" action="/storeimg"  enctype="multipart/form-data">
                    @csrf
                    <label for="foto">Alterar foto</label>
                      <input type="file" name="foto" required> 
                      <input type="submit" value="Salvar" class=" btn-primary p10lr">
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              <div id="form"> 
              
                  <form method="POST" action="/addInfo"  enctype="multipart/form-data">
                    @csrf
                    <label for="nome">Nome</label>
                      <input type="text" name="nome" > 
                      <label for="nome">Pais</label>
                      <input type="text" name="pais" >
                      <label for="nome">Estado</label>
                      <input type="text" name="estado" >
                      <label for="nome">Cidade</label>
                      <input type="text" name="cidade" >
                      <label for="nome">Bairro</label>
                      <input type="text" name="bairro" >
                      <label for="nome">Rua</label>
                      <input type="text" name="rua" >
                      <label for="nome">Numero</label>
                      <input type="text" name="numero" >
                      <label for="nome">Complemento</label>
                      <input type="text" name="complemento" >
                      <input type="submit" value="Salvar" class=" btn-primary p10lr">

                  </form>
              </div>
      </div>
    </div>
  </div>
</div>
@push('scripts')

    <script> 
      var addPet=document.getElementById('addPet'); 
      var plus=document.getElementById('plus');
      var petCards=document.getElementById('petcards');

      var select=document.getElementById('select');
      var alteracoes=document.getElementById('alteracoes');


    function showHide(){
      if(alteracoes.style.display=="block"){
        alteracoes.style="display:none";
      }else 
       
      if(alteracoes.style.display=="none"){
      alteracoes.style="display:block";
      }

    }

    function addPetForm(){
      addPet.style="display: flex ";
      plus.style="display: none !important";
      petCards.style="display: none !important";

    }

    function hidePlus(){
      
      addPet.style="display: none ";
      plus.style="display: block ";
      petCards.style="display: flex";

    }
    document.addEventListener('submit',hidePlus);




    </script>

@endpush
@endsection