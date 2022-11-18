<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPets</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/cardsHome.css">
    <link rel="stylesheet" href="css/login.css">
  <!--bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body id='home'>
          <nav class="navbar navbar-expand-lg sticky-top "> 
            <div class="container-fluid">
              <a class="navbar-brand" href="home.html" style="color: rgb(45, 206, 80);
              ;"> <img style="width: 50px;" src="imgHome/icon.png" alt="icone appets"> Appets</a>
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
                    <a class="nav-link" href="#ps">Primeiros Socorros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#maps">Vets na Região</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#ongs">ONGs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Iniciar sessão</a>
                  </li>
                  <li class="nav-item linkTutor" >
                    <a class="nav-link" href="/tutor">Area do Tutor</a>
                  </li>
                </ul>
                <a style="width: 121.797px;"> </a>

              </div>
            </div>
          </nav>
    <div  class="page-home">
   
      <header>
        
          <section class="jumbotron ">
            <div class=" height-jumbotron ">
                <div class=" flex-column">            
                  <img class="d-block m-l-r borda " id="imgJumbo" src="imgHome/icon.png"  alt="" >
                    <div>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
            </div>
        </section>
      </header>
      <main>
        <div class="principaisOc" id="ps">
          <h1 class="margin-30-top-bottom pteb-20  ">Principais Ocorrências</h1>
          
      </div>
        
        <section class="cards">
          
             <div class="card card-1">

              
                <a href = "conteudo.php?nome=envenenamentoCard" ><div class="imgCard"><img class="d-block m-l-r borda " src="imgHome/envenenamento.png"  alt="Imagem de capa do card" > </div> 
                Envenenamento </a>
       
            
             </div>
             <div class="card card-2">
              
              <a href = "conteudo.php?nome=quedaCard" > <div class="imgCard"><img class="d-block m-l-r borda" src="imgHome/queda.png"  alt="Imagem de capa do card"></div>
                Queda</a>
       
       
             </div>
             <div class="card card-3">
              
              <a href = "conteudo.php?nome=brigaCard"> <div class="imgCard"><img class="d-block m-l-r borda" src="imgHome/briga.png"  alt="Imagem de capa do card"></div>
                Briga</a>
       
             </div>
             <div class="card card-4">
              
                <a href = "conteudo.php?nome=afogamentoCard" ><div class="imgCard"> <img class="d-block m-l-r borda " src="imgHome/afogamento.png"  alt="Imagem de capa do card" > </div>Afogamento</a>
       
             </div>
             <div class="card card-5">
              
              <a href = "conteudo.php?nome=asfixiaCard"><div class="imgCard"> <img class="d-block m-l-r borda" src="imgHome/asfixia.png"  alt="Imagem de capa do card"></div>
                Asfixia</a>
             </div>

       </div>
      </section>   
      <div class="d-flex justify-content-center"> <a  id="options" class ="btn-primary btn" href="conteudo.html">Todas as Opções</a></div>

      
      <section id="maps">
        <div class="titMaps">
        <h1 class="margin-30-top-bottom txt-center pteb-20 ">Clinicas Veterinárias na região</h1>
      </div>
        
        <div class=" flex-column">
          <div class="d-flex justify-content-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29422.914637068807!2d-47.25228895145061!3d-22.807490504975576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sveterinarios%20na%20regiao!5e0!3m2!1spt-BR!2sbr!4v1657055827086!5m2!1spt-BR!2sbr" width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    

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
                     <input type="button" value="Cadastre-se" class="btn-primary p10lr" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
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

      <div id="form"> 
                  <img src="imgHome/iconLogin.png" alt ="icone appets">
                  <form method="post" action='/store'>
                  @csrf
                  <label for="usuario"> Email</label><br>
                      <input type="email" name="email" required><br>
                      <label for="usuario"> Usuário</label><br>
                      <input type="text" name="usuario" required><br>
                      <label for="senha">Senha</label><br>
                      <input type="password" name="senha" required><br>
                      <label for="senha">Confirmação Senha</label><br>
                      <input type="password" name="senhaConfirma" required><br><br>
                      <input type="submit"  value="Cadastrar-se" class="btn-primary p10lr" style="margin-bottom: 10px;">
                      <input type="button" value="Voltar ao login" class=" btn-primary p10lr" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                      
                  </form>
              </div>
      </div>
    </div>
  </div>
</div>

          <!-- Footer -->
          <div>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bgblury">
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
</body>
</html>