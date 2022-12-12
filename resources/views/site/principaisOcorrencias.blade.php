<section class="cards">
    @foreach ($ocorrencias as $ocorrencia)
    <div class="card card-1">
        <a href = "ocorrencia/conteudo?id={{$ocorrencia->id}}" >
            <div class="imgCard" style="background-image: url('/imgOcorrencias/ocorrencias/{{$ocorrencia->foto_ocorrencia}}') ">
             </div> 
        {{$ocorrencia->titulo_ocorrencia}} 
        </a>
     </div>
    @endforeach

</section>
