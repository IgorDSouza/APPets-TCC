<section class="cards">
    @foreach ($ocorrencias as $ocorrencia)
    <div class="card card-1">
        <a href = "conteudo.php?nome=envenenamentoCard" >
            <div class="imgCard" style="background-image: url('/imgUsuario/pets/{{$ocorrencia->foto_ocorrencia}}') ">
             </div> 
        {{$ocorrencia->titulo_ocorrencia}} 
        </a>
     </div>
    @endforeach

</section>