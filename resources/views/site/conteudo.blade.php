@extends('layout.default')
@push('links')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPets</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/cardsConteudo.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href='css/conteudo.css'>
  <!--bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush
@section('content')
  <nav class="navbar navbar-expand-lg sticky-top "> 
    <div class="container-fluid">
      <a class="navbar-brand" href="home.html" style="color: rgb(45, 206, 80);
      ;"> <img style="width: 50px;" src="../wwwroot/img/imgHome/iconLogin.png" alt="icone appets"> Appets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="justify-content: center;
      " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Iniciar sessão</a>
          </li>
          <li class="nav-item linkTutor" >
            <a class="nav-link">Area do Tutor</a>
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
                  <img id="imgJumboCont" src="../wwwroot/img/imgConteudo/icon.png"  alt="" >
                    <div>
                      <h1>Ocorrências </h1>
                    </div>
        </section>
      </header>
      <main>
        <section class="cards">
          
             <div class="card">

              
                <a data-bs-toggle="modal"  role="button"href="#Envenenamento" ><div class="imgCard"><img class="d-block m-l-r borda " src="../wwwroot/img/imgConteudo/envenenamento.png"  alt="Imagem de capa do card" > </div> 
                Envenenamento </a>
       
            
             </div>
             <div class="card">
              
              <a data-bs-toggle="modal"  role="button" href="#Queda"> <div class="imgCard"><img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/queda.png"  alt="Imagem de capa do card"></div>
                Queda</a>
       
       
             </div>
             <div class="card">
              
              <a data-bs-toggle="modal"  role="button"href="#Briga"> <div class="imgCard"><img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/briga.png"  alt="Imagem de capa do card"></div>
                Briga</a>
       
             </div>
             <div class="card">
              
                <a data-bs-toggle="modal"  role="button"href="#Afogamento" ><div class="imgCard"> <img class="d-block m-l-r borda " src="../wwwroot/img/imgConteudo/afogamento.png"  alt="Imagem de capa do card" > </div>Afogamento</a>
       
             </div>
             <div class="card">
              
              <a data-bs-toggle="modal"  role="button"href="#Asfixia"><div class="imgCard"> <img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/asfixia.png"  alt="Imagem de capa do card"></div>
                Asfixia</a>
             </div>
             <div class="card">

              
              <a data-bs-toggle="modal"  role="button"href="#Atropelamento" ><div class="imgCard"><img class="d-block m-l-r borda " src="../wwwroot/img/imgConteudo/atropelamento.png"  alt="Imagem de capa do card" > </div> 
              Atropelamento </a>
     
          
           </div>
           <div class="card">
            
            <a data-bs-toggle="modal"  role="button"href="#Queimadura" > <div class="imgCard"><img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/queimadura.png"  alt="Imagem de capa do card"></div>
              Queimadura</a>
     
     
           </div>
           <div class="card">
            
            <a data-bs-toggle="modal"  role="button"href="#Choque"> <div class="imgCard"><img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/choque.png"  alt="Imagem de capa do card"></div>
              Choque Elétrico</a>
     
           </div>
           <div class="card">
            
              <a data-bs-toggle="modal"  role="button"href="#Vomito" ><div class="imgCard"> <img class="d-block m-l-r borda " src="../wwwroot/img/imgConteudo/diarreia.png"  alt="Imagem de capa do card" > </div>
                Vômito e Diarreia</a>
     
           </div>
           <div class="card">
            
            <a data-bs-toggle="modal"  role="button"href="#Picada"><div class="imgCard"> <img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/picada.png"  alt="Imagem de capa do card"></div>
              Picada de insetos</a>
              
           </div>
           <div class="card">
            
            <a data-bs-toggle="modal"  role="button"href="#Intoxicação"><div class="imgCard"> <img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/intoxicacaoExterna.png"  alt="Imagem de capa do card"></div>
              Intoxicação Externa</a>
              
           </div>
           <div class="card " >
            
            <a data-bs-toggle="modal"  role="button"href="#Cortes"><div class="imgCard"> <img class="d-block m-l-r borda" src="../wwwroot/img/imgConteudo/cortes.png"  alt="Imagem de capa do card"></div>
              Cortes Profundos</a>
              
           </div>

       </div>
      </section>
      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
                    <div id="form"> 
                            <img src="../wwwroot/img/imgHome/iconLogin.png" alt ="icone appets">
                        <form method="POST" action="home.php">
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
      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div id="form"> 
                            <img src="../wwwroot/img/imgHome/iconLogin.png" alt ="icone appets">
                        <form method="POST" action="home.php">
                        <label for="usuario"> Email</label><br>
                            <input type="email" name="email"><br>
                            <label for="usuario"> Usuário</label><br>
                            <input type="text" name="usuario"><br>
                            <label for="senha">Senha</label><br>
                            <input type="password" name="senha"><br>
                            <label for="senha">Confirmação Senha</label><br>
                            <input type="password" name="senha"><br><br>
                            <input type="submit" value="Cadastrar-se" class="btn-primary p10lr">
                            <input type="button" value="Voltar ao login" class=" btn-primary p10lr" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">
                            
                        </form>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="Envenenamento" aria-hidden="true" aria-labelledby="Envenenamento" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent" > 
              <h2>Envenenamento</h2>

                     <p> Pode ser preciso fazer uma lavagem do estômago com uso de carvão ativado (caso ele tenha ingerido a substância tóxica há pouco tempo). Antes de mais nada, procure o médico veterinário o mais rápido possível. É importante que você não tente oferecer nada ao cachorro, como algum alimento ou água. Algumas pessoas acreditam que o leite pode ajudar a reverter o quadro de envenenamento, mas não é verdade. Não tente também resolver o problema com receitas caseiras, pois nem sempre dá certo. Algumas substâncias podem até aumentar ainda mais o efeito do veneno em vez de inibi-lo.</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Queda" aria-hidden="true" aria-labelledby="Queda" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent" >
              <h2>Queda</h2>
 
                     <p> Pode ser preciso fazer uma lavagem do estômago com uso de carvão ativado (caso ele tenha ingerido a substância tóxica há pouco tempo). Antes de mais nada, procure o médico veterinário o mais rápido possível. É importante que você não tente oferecer nada ao cachorro, como algum alimento ou água. Algumas pessoas acreditam que o leite pode ajudar a reverter o quadro de envenenamento, mas não é verdade. Não tente também resolver o problema com receitas caseiras, pois nem sempre dá certo. Algumas substâncias podem até aumentar ainda mais o efeito do veneno em vez de inibi-lo.
                      CONTATE IMEDIATAMENTE UM VETERINÁRIO!

                     </p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Briga" aria-hidden="true" aria-labelledby="Briga" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Briga</h2>
                     <p> Pode ser preciso fazer uma lavagem do estômago com uso de carvão ativado (caso ele tenha ingerido a substância tóxica há pouco tempo). Antes de mais nada, procure o médico veterinário o mais rápido possível. É importante que você não tente oferecer nada ao cachorro, como algum alimento ou água. Algumas pessoas acreditam que o leite pode ajudar a reverter o quadro de envenenamento, mas não é verdade. Não tente também resolver o problema com receitas caseiras, pois nem sempre dá certo. Algumas substâncias podem até aumentar ainda mais o efeito do veneno em vez de inibi-lo.</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Afogamento" aria-hidden="true" aria-labelledby="Afogamento" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent" > 
              <h2>Afogamento</h2>
                     <p> Deixe o animal inclinado, levante as patas traseiras para cima, para que o excesso de água saia pela boca e pelo focinho.
                      Se a temperatura do animal estiver baixa, o aqueça com cobertor ou bolsa de água quente.
                      Pressione o tórax, faça massagem cardíaca e respiração artificial.
                      CONTATE IMEDIATAMENTE UM VETERINÁRIO! </p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="modal fade" id="Asfixia" aria-hidden="true" aria-labelledby="Asfixia" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Asfixia</h2>

                     <p> Asfixia (caso o animal esteja com líquido no focinho e na boca, é situação de emergência, veterinário)
                      Afrouxar a coleira.
                      Puxe a língua do animal para fora. (Não tenha contato direto com a língua do animal).
                      Se houver algo obstruindo a garganta, tente remover com uma PINÇA.
                      Aperte o tórax do animal, pode gerar fluxo de ar de dentro pra fora para expulsar o objeto. CONTATE IMEDIATAMENTE UM VETERINÁRIO!</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Atropelamento" aria-hidden="true" aria-labelledby="Atropelamento" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Atropelamento</h2>

                     <p> Coloque uma focinheira ou mordaça (cadarço, barbante, laço de cabelo) no focinho pra evitar que ele te morda, por estar mexendo onde dói. Evite levantar ou mudar o animal de lugar, para em casos de fratura, não agravar. Puxe a língua do animal para fora, para facilitar a chegada de ar aos pulmões. CONTATE IMEDIATAMENTE UM VETERINÁRIO!</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Queimadura" aria-hidden="true" aria-labelledby="Queimadura" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Queimadura</h2>

                     <p> Queimaduras (de 2° e 3° grau, a limpeza deve ser feita com o animal sedado e sob anestesia geral)
                      Já em queimaduras de 1° grau, lave o local com soro fisiológico por alguns minutos. Queimaduras de 1° grau, costumam ser tratadas com pomada antibiótica (Nebacetin, perfeita! Menos em regiões genitais e rosto). Não faça curativo fechado, aplique uma compressa de gaze sobre a pomada para proteger a queimadura. Nas queimaduras com bolhas, faça curativo de gaze com vaselina líquida estéril. Faça com que o animal não lamba a região. Mantenha o animal muito hidratado. CONTATE IMEDIATAMENTE UM VETERINÁRIO!</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Choque" aria-hidden="true" aria-labelledby="Choque" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Choque Elétrico</h2>

                     <p> Pode ser preciso fazer uma lavagem do estômago com uso de carvão ativado (caso ele tenha ingerido a substância tóxica há pouco tempo). Antes de mais nada, procure o médico veterinário o mais rápido possível. É importante que você não tente oferecer nada ao cachorro, como algum alimento ou água. Algumas pessoas acreditam que o leite pode ajudar a reverter o quadro de envenenamento, mas não é verdade. Não tente também resolver o problema com receitas caseiras, pois nem sempre dá certo. Algumas substâncias podem até aumentar ainda mais o efeito do veneno em vez de inibi-lo.</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Vomito" aria-hidden="true" aria-labelledby="Vomito" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <H2>Vômito e Diarréia</H2>
                     <p>Pode indicar diversas doenças que só podem ser diagnosticadas pelo médico veterinário. A tentativa de hidratação é frequentemente inútil! Apenas mantenha o animal limpo e garanta que ele não engasgue com o vômito mantendo-o em pé ou com a cabeça para baixo. CONTATE IMEDIATAMENTE UM VETERINÁRIO!</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Picada" aria-hidden="true" aria-labelledby="Picada" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
                    <h2>Picada Inseto</h2>
                     <p>Se o animal permitir coloque uma sacola com gelo sobre o local da picada, para reduzir a dor. Se apresentar hipotermia, mantenha o animal aquecido. Não coloque remédios caseiros. Não corte o local da picada, e nem chupe o veneno, também não amarre o local na intenção do veneno não se espalhar pelo corpo (fazendo isso, o veneno se concentra no local da picada, podendo gangrenar e perda do membro). CONTATE IMEDIATAMENTE UM VETERINÁRIO! </p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="modal fade" id="Intoxicação" aria-hidden="true" aria-labelledby="Intoxicação" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
              <h2>Intoxicação</h2>

                     <p>  
                      Banho com água morna ajuda a remover resíduos que estiverem na pele, mantenha o local sempre limpo!
                      O uso de carvão ativado pode oferecer algum auxílio, ele reduz a quantidade que é absorvida pelo organismo.
                      CONTATE IMEDIATAMENTE UM VETERINÁRIO!
                     </p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>     
      <div class="modal fade" id="Cortes" aria-hidden="true" aria-labelledby="Cortes" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
            <div class="psContent"> 
                      <h2>Cortes</h2>
                     <p> Cortes profundos urgentemente estanque a hemorragia, e depois pense no resto. Após conter a hemorragia, higienize bem o local com soro fisiológico, gaze e também antisséptico, se possível, remova os pelos que estão em volta do ferimento para facilitar a sutura e limpeza. Os cortes devem ser saturados em até 6 horas após o acidente (passando de 6 horas, NÃO deve ser saturada, consideramos essa lesão contaminada). Caso não consiga, essa lesão deve ser tratada como ferida aberta.(Para acelerar a cicatrização, após 24h pode ser passado açúcar no local.)CONTATE IMEDIATAMENTE UM VETERINÁRIO!</p>
              <input type="button" value="Fechar" class=" btn-primary p10lr"  data-bs-dismiss="modal">

            </div>
            </div>
          </div>
        </div>
      </div>   
  @endsection