        
          <h3>Remedios</h3>
         
         @foreach($remedios as $remedio)    
           <p>
             <strong>nome</strong> {{$remedio->nome}}
             <strong>Dosagem(ml)</strong> {{$remedio->dosagem}}
             <strong>Frequencia</strong> {{$remedio->periodo}}
             <div class="botoesAlterEx">
               <a role="button" href="remedio/deleteRemedio/{{$remedio->id}}">Excluir  </a>
               <a  role="button" onclick="alterarRemedio();">Alterar</a>
            </div>
            
           </p><br>
           <div id="alterRemedio" class="alter"></div>
            @endforeach

         <h3>Cuidados</h3>
            @foreach($cuidados as $cuidado)

            <div id="alterCuidado" class="alter"></div>
            
           <p>
             <strong>Cuidados</strong> {{$cuidado->observacao}}
             <div class="botoesAlterEx"> 
               <a role="button" href="remedio/deleteCuidado/{{$cuidado->id}}">Excluir  </a>
               <a  role="button" onclick="alterarCuidado();">Alterar</a>
            
 </p> <br>
 
           @endforeach
                         <h1><a class="nav-link"  data-bs-toggle="modal" href="#storeRemedio" role="button">+</a></h1>


     </div>
  
     @push('scripts')
  <script> 
  function alterarRemedio(){
    var div = document.getElementById('alterRemedio');
    if(div.innerHTML == ""){
       div.innerHTML= '<div id="form" class="formRemedioeCuidado"> <form method="post" action="remedio/editRemedio/@isset($remedio->id){{$remedio->id}}@endisset">  @csrf <h3>Alterar Remedio</h3><label for="nomeRemedio"> Novo Nome</label><br> <input type="text" name="nomeRemedio" value="@isset($remedio->nome){{$remedio->nome}}@endisset" required ><br> <label for="dosagem"> Nova Dosagem(ML)</label><br><input type="number" name="dosagem" value="@isset($remedio->dosagem){{$remedio->dosagem}}@endisset"  required><br><label for="periodo">Novo Periodo</label><br><input type="text" name="periodo" value="@isset($remedio->periodo){{$remedio->periodo}}@endisset"required ><br><input type="submit"  value="Alterar Remedio" class="btn-primary p10lr" style="margin-bottom: 10px;"><input type="button" class="btn-primary p10lr" value="Fechar" onclick="alterarRemedio()"> </form>  </div> '

    }else{
      div.innerHTML='';

    }
   }

   function alterarCuidado(){
    var div = document.getElementById('alterCuidado');
   

    if(div.innerHTML == ""  ){
       div.innerHTML= '<div id="form" class="formRemedioeCuidado"> <form method="post" action="remedio/editCuidado/@isset($cuidado->id){{$cuidado->id}}@endisset">  @csrf <h3>Alterar Cuidado</h3><label for="cuidado"> Descreva o novo Cuidado Especial</label><br><input type="text" name="cuidado" value="@isset($cuidado->observacao){{$cuidado->observacao}}@endisset" required><br> <input type="submit"  value="Alterar Cuidado" class="btn-primary p10lr" style="margin-bottom: 10px;"><input type="button" class="btn-primary p10lr" value="Fechar"  onclick="alterarCuidado()"></form></div> '
      


    }else{
      div.innerHTML='';

    }
   }
  </script>
@endpush