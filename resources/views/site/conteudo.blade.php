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
    <style>
    
  </style>
@endpush
@section('content')
  <nav class="navbar navbar-expand-lg sticky-top "> 
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="color: rgb(45, 206, 80);
      ;"> <img style="width: 50px;" src="../imgHome/iconLogin.png" alt="icone appets"> Appets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="justify-content: center;
      " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Inicio</a>
          </li>
          <!--DROPDOWN OCORRÊNCIAS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ocorrências
            </a>
            <ul class="dropdown-menu">
              @foreach ($ocorrencias as $ocorrencia)
                <li><a class="dropdown-item" data-bs-toggle="modal" href="#ocorrencia{{$ocorrencia->id}}" role="button">{{$ocorrencia->titulo_ocorrencia}}</a></li>    
              @endforeach
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
          @if (session("permissao") == "a")
            <div class="d-flex flex-wrap justify-content-around">
              <a href="{{route('ocorrencia.create')}}" id="ocorrenciaButtonAdd" class="mt-4 btn btn-success ocorrenciaButton">Adicionar Ocorrência</a>
              <button onclick="showEditButton()" class="mt-4 btn btn-warning ocorrenciaButton" id="editBtn" data-edit="0">Editar Ocorrência</button>
              <button onclick="showDelButton()" class="mt-4 btn btn-danger ocorrenciaButton" id="deleteBtn" data-del="0">Deletar Ocorrências</button>
            </div>
          @endif
        
        <section class="cards">
          @foreach ($ocorrencias as $ocorrencia)
          <div class="card">
            <!-- Botão para editar uma ocorrência -->
            <a class="ocorrenciaEditButton mb-4" href="{{route('ocorrencia.edit',['id'=>$ocorrencia->id])}}" title="Editar {{$ocorrencia->titulo_ocorrencia}}" style="display: none; color: #ffc107; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>
            <!-- Botão para deletar uma ocorrência -->
            <a class="ocorrenciaDelButton mb-4" data-bs-toggle="modal" data-bs-target="#del{{$ocorrencia->id}}" title="Deletar {{$ocorrencia->titulo_ocorrencia}}" style="display: none; color: #dc3545; cursor: pointer;"><i class="fa-solid fa-trash"></i></a>

            <a data-bs-toggle="modal"  role="button" href="{{'#ocorrencia'.$ocorrencia->id}}"  id="{{$ocorrencia->id}}">
              <div class="imgCard" style="background-image: url('{{URL::asset('imgOcorrencias/ocorrencias/'.$ocorrencia->foto_ocorrencia)}}') ">
                {{-- <img class="d-block m-l-r borda " src=""  alt="Imagem de capa do card" >  --}}
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

      <div data-modal="modais-delete">
        <div class="modal fade" id="del{{$ocorrencia->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar ocorrência de {{$ocorrencia->titulo_ocorrencia}} !</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Você tem certeza que deseja deletar esta ocorrência?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="{{route('ocorrencia.delete',['id'=>$ocorrencia->id])}}" class="btn btn-primary">Deletar</a>
              </div>
            </div>
          </div>
      </div>
    </section>
      @endforeach
    </section>

    
  @endsection

  @push('scripts')
    @if(session('tutor')!=null && session('tutor')!='' )                  
      <script> 
        var crudButtons = document.getElementsByClassName("ocorrenciaButton");
        const editButton = document.getElementsByClassName("ocorrenciaEditButton");
        const delButton = document.getElementsByClassName("ocorrenciaDelButton");
        const textEditButton = "Editar Ocorrência";
        const textDelButton = "Deletar Ocorrência";
        for(let i = 0; i < crudButtons.length; i++){
          crudButtons[i].style.display = "block";
        }

        //função para a chamada da função que exibirá os botões de editar nos cards
        function showEditButton(){
          changeStateEditButton();
        }

        //função para a chamada da função que exibirá os botões de editar nos cards
        function showDelButton(){
          changeStateDelButton();
        }

        //Muda os estados dos botões, quando clicado pela primeira vez, mostras os botões em cada card, quando clicado novamente, esconde eles.
        function changeStateEditButton(){
          var dataEdit = crudButtons[1].getAttribute("data-edit");
          if(dataEdit === "1"){
            crudButtons[1].setAttribute("data-edit","0");
            crudButtons[1].classList.replace("btn-info", "btn-warning");
            crudButtons[1].textContent = textEditButton;
            crudButtons[2].style = "display:block";
            for(let i = 0; i < editButton.length; i++){
              editButton[i].style.display = "none";
            }
          }
          else{
            crudButtons[2].style = "display:none";
            crudButtons[1].classList.replace("btn-warning", "btn-info");
            crudButtons[1].textContent = "Concluir Edições";
            crudButtons[1].setAttribute("data-edit","1");
            for(let i = 0; i < editButton.length; i++){
              editButton[i].style.display = "flex";
            }
          }
        }

        //Muda os estados dos botões, quando clicado pela primeira vez, mostras os botões em cada card, quando clicado novamente, esconde eles.
        function changeStateDelButton(){
          var dataDel = crudButtons[2].getAttribute("data-del");
          if(dataDel === "1"){
            crudButtons[2].setAttribute("data-del","0");
            crudButtons[2].classList.replace("btn-info", "btn-danger");
            crudButtons[2].textContent = textDelButton;
            crudButtons[1].style = "display:block";
            for(let i = 0; i < delButton.length; i++){
              delButton[i].style.display = "none";
            }
          }
          else{
            crudButtons[1].style = "display:none";
            crudButtons[2].classList.replace("btn-danger", "btn-info");
            crudButtons[2].textContent = "Concluir Deleções";
            crudButtons[2].setAttribute("data-del","1");
            for(let i = 0; i < delButton.length; i++){
              delButton[i].style.display = "flex";
            }
          }
        }

        
      </script>
      <script>
        var id = @isset($_GET['id'])"{{ $_GET['id'] }}"@endisset 
        document.getElementById(id).click();

    </script>
     @endif
     @endpush