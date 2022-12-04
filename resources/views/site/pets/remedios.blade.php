        
          <h3>Remedios</h3>
         
         @foreach($remedios as $remedio)    
           <p>
             <strong>nome</strong> {{$remedio->nome}}
             <strong>Dosagem(ml)</strong> {{$remedio->dosagem}}
             <strong>Frequencia</strong> {{$remedio->periodo}}

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="ocorrenciaDelButton mb-4" href="remedio/deleteRemedio/{{$remedio->id}}" style=" color: #dc3545; cursor: pointer;"><i class="fa-solid fa-trash"></i></a>&nbsp;&nbsp;

             <a class="ocorrenciaEditButton mb-4" onclick="alterarRemedio();" style=" color: #ffc107; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>                  
           </p><br>
           <div id="alterRemedio" class="alter"></div>
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


  </script>
@endpush