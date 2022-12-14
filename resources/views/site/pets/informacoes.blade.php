        <h3>Informações do Pet</h3>
        <div id="alterInfo" class="alter"></div>
        <p style="font-size:20px">
             <strong>Nome</strong> {{$pet->nome}}<br>   
             <strong>Data de Nascimento</strong> {{$pet->idade}}<br>
             <strong>Raça</strong> {{$pet->raca}}<br>
             <strong>Altura</strong> {{$pet->altura}}<br> 
             <strong>Comprimento</strong> {{$pet->comprimento}}<br> 
             <strong>Peso</strong> {{$pet->peso}}

             <br><br><a class="ocorrenciaEditButton mb-4" onclick="alterarInfo();" style=" color: #ffc107; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>      
</p>
           
    @push('scripts')
  <script> 
  function alterarInfo(){
    var div = document.getElementById('alterInfo');
    if(div.innerHTML == ""){
       div.innerHTML= '<div id="form" class="formRemedioeCuidado"> <form method="post" action="informacoes/updatePet" enctype="multipart/form-data">  @csrf <h3>Alterar Informações</h3><label for="nome"> Novo Nome</label><br> <input type="text" name="nome" value="@isset($pet->nome){{$pet->nome}}@endisset" required ><br> <label for="idade"> Idade(Data de Nascimento) </label><br><input type="date" name="dataNascto" value="@isset($pet->idade){{$pet->idade}}@endisset"  required><br><label for="raca">Raça</label><br><input type="text" name="raca" value="@isset($pet->raca){{$pet->raca}}@endisset" required> <br> <label for="altura">Altura</label><br><input type="text" name="altura" value="@isset($pet->altura){{$pet->altura}}@endisset" > <br>  <label for="comprimento">Comprimento</label><br><input type="text" name="comprimento" value="@isset($pet->comprimento){{$pet->comprimento}}@endisset" ><br> <label for="peso">Peso</label><br><input type="text" name="peso" value="@isset($pet->peso){{$pet->peso}}@endisset"> <br><br> <label for="foto">Foto do Pet</label><input type="file" name="foto" ><br><br> <input type="submit"  value="Alterar informações" class="btn-primary p10lr" style="margin-bottom: 10px;"> <input type="button" class="btn-primary p10lr" value="Fechar" onclick="alterarInfo()"> </form>  </div> '

    }else{
      div.innerHTML='';

    }
  }
  </script>
@endpush