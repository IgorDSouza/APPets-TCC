<section class="cards">
    @foreach ($ocorrencias as $ocorrencia)
    <div class="card card-1">
        <a href = "conteudo.php?nome=envenenamentoCard" >
            <div class="imgCard">
                <img class="d-block m-l-r borda " src="imgHome/envenenamento.png"  alt="Imagem de capa do card" >
             </div> 
        {{$ocorrencia->titulo_ocorrencia}} 
        </a>
     </div>
    @endforeach

</section>