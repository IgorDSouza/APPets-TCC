@extends('layout.default')
@push('links')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/cardsHome.css">
    <link rel="stylesheet" href="css/login.css">
  <!--bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush
@section('content')
  <nav class="navbar navbar-expand-lg sticky-top "> 
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="color: rgb(45, 206, 80);
      ;"> <img style="width: 50px;" src="imgHome/icon.png" alt="icone appets"> Appets</a>
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
            <a class="nav-link" href="#ps">Primeiros Socorros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#maps">Vets na Região</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#ongs">ONGs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id='loginNav' data-bs-toggle="modal" href="#exampleModalToggle" role="button">Iniciar sessão</a>
          </li>
          <li id="tutorNav" class="nav-item">
            <a class="nav-link"  href="{{route('site.tutor',session('id') ) }}" >Área do Tutor</a>
          </li>
          <li id="ocorrenciaNav" class="nav-item">
            <a class="nav-link"  href="{{route('ocorrecia.conteudos')}}">Ocorrências</a>
          </li>
          <li id="cadAdmin" class="nav-item">
            <a class="nav-link" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Cadastrar Administrador</a>
          </li>
        </ul>
        <a style="width: 121.797px;"> </a>

      </div>
    </div>
  </nav>
  <div class="page-home">
    <!--Header-->
    <header class="jumbotron" style="width: 100%;">
      <div class=" height-jumbotron">
        <div class=" flex-column">            
          <img class="d-block m-l-r borda " id="imgJumbo" src="imgHome/icon.png"  alt="" >
          <div>
              <a href="#" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>
    </header>
    <!--Conteúdo Principal-->
    <main>
      <div class="principaisOc" id="ps">
        <h1 class="margin-30-top-bottom pteb-20  ">Principais Ocorrências</h1>
      </div>     

      <!-- View das principais Ocorrências-->
      @include('site.principaisOcorrencias')
      
      <div class="d-flex justify-content-center"> <a  id="options" class ="btn-primary btn" href="{{route('ocorrecia.conteudos')}}">Todas as Opções</a></div>
      
      <!--Maps-->
      <section id="maps">
        <div class="titMaps">
          <h1 class="margin-30-top-bottom txt-center pteb-20 ">Clinicas Veterinárias na região</h1>
        </div>
        <div class=" flex-column">
          <div class="d-flex justify-content-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14705.93503694746!2d-47.2240046020657!3d-22.85858142116016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sveterinarios%20  @if(session('cidade') == null) hortolandia @else {{session('cidade')}} @endif !5e0!3m2!1spt-BR!2sbr!4v1670545997447!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
  
      <!--Principais Ongs-->
      <div class="ongs" id="ongs"><h1>ONGS Parceiras</h1>
        <div class="ongicons"><a href="https://www.facebook.com/ProtetoresDosAnimaisdeHortolandia/"> <img src="imgHome/ong1.jpg" alt="" srcset=""><br> Protetores Dos Animais de Hortolandia </a>
          <a href="https://www.facebook.com/projetocaofeliz/"> <img src="imgHome/ong2.jpg" alt="" srcset=""><br> Projeto Cão Feliz </a>

          <a href="https://www.facebook.com/AssociacaoBemeVidaAnimalHortolandia/"> <img src="imgHome/ong3.jpg" alt="" srcset=""> <br>Associação Bem e Vida </a>

          <a href="https://www.facebook.com/ONG-Vida-Animal-124335770979710/"> <img src="imgHome/ong4.jpg" alt="" srcset=""> <br>Vida Animal </a>

          <a href="https://www.facebook.com/AmorEAcaoAnimalONG/"> <img src="imgHome/ong5.jpg" alt="" srcset=""><br>Amor e Ação Animal </a>
        </div>
      </div>
    </main>
  </div>
    
  <!-- Modais -->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div id="form"> 
            <img src="imgHome/iconLogin.png" alt ="icone appets">
              <form method="POST" action="/login">
                @csrf
                  <label for="usuario"> Usuário</label><br>
                  <input type="text" name="usuario"><br>
                  <label for="senha">Senha</label><br>
                  <input type="password" name="senha"><br><br>
                  <input type="submit" value="Login" class=" btn-primary p10lr">
                  <input type="button" id="Btncadastrar" value="Cadastre-se" class="btn-primary p10lr" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL CADASTRO -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      <div id="form" class="formCad"> 
                  <img src="imgHome/iconLogin.png" alt ="icone appets">
                  <form method="post" action='/store'>
                  @csrf
        
                      <label for="usuario"> Email</label><br>
                      <input type="email" name="email" placeholder="user@email.com"  required><br>
                      <label for="usuario"> Usuário </label><br>
                      <input type="text" name="usuario" placeholder="usuario" required><br>
                      <div id="cadAdminForm">
                        <label for="permissao">Permissão</label><br>
                        <select name="permissao" class="permissao-field w-100">
                          <option value="a">Administrador</option>
                        </select><br>
                      </div>
                      <label for="senha" >Senha</label><br>
                      <input type="password" name="senha"  minlength="8" maxlength="10" placeholder="Minimo 8 digitos" required><br>
                      <label for="senha" >Confirmação Senha</label><br>
                      <input type="password"  name="senhaConfirma" minlength="8" maxlength="10"   placeholder="Minimo 8 digitos"required><br><br>
                      <input type="submit"  value="Cadastrar-se" class="btn-primary p10lr" style="margin-bottom: 10px;">
                      <input type="button"  value="Voltar ao login" class=" btn-primary p10lr" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                      
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>

          <!-- Footer -->
          <div class="">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bgblury">
              <p class="col-md-4 mb-0">© 2022 Appets</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              </a>
          
              <ul class="nav">
                <li class="nav-item"><a href="/" class="nav-link px-2 ">Home</a></li>
                <li class="nav-item"><a href="#ps" class="nav-link px-2 ">Principais Ocorrências</a></li>
                <li class="nav-item"><a href="#maps" class="nav-link px-2 ">Veterinários na Região</a></li>
                <li class="nav-item"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="nav-link px-2">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2">Sobre</a></li>
              </ul>
            </footer>
      </div> 
      
@endsection

@push('scripts')
@if(session('tutor')!=null && session('tutor')!='' )                  
  <script> 
    document.getElementById("loginNav").style.display = "none";
    document.getElementById("tutorNav").style.display = "block";
    document.getElementById("ocorrenciaNav").style.display = "block";
  </script>
  @if (session("permissao") == "a")
      <script>
        document.getElementById("cadAdmin").style.display = "block";
        document.getElementById("cadAdminForm").style.display = "block";
      </script>   
  @endif
  @else{
    <script>
      const parentForm = document.getElementsByClassName("formCad");
      const permissao = document.getElementById("cadAdminForm");
      permissao.remove();
    </script>
  } 
 @endif
 @if(isset($_GET['erro']) && $_GET['erro']== 'usuario'))
 <script> 
    window.alert('Usuario ou email ja cadastrado! Tente novamente.');

    document.getElementById("loginNav").click()

      document.getElementById("Btncadastrar").click();
    




  </script>
  @elseif(isset($_GET['erro']) && $_GET['erro']== 'senha')
  <script> 
    window.alert('Senhas não coincidem.');

    document.getElementById("loginNav").click();

      document.getElementById("Btncadastrar").click();
  

    


  </script>
  @elseif(isset($_GET['erro']) && $_GET['erro']== 'invalido')
  <script> 
    window.alert('Usuario ou senha invalidos!');

    document.getElementById("loginNav").click();
     
  </script>
 @endif

 @endpush
</body>
</html>
