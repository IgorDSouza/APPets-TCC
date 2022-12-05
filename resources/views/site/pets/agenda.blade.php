        <h3>Agenda</h3>
@foreach($compromissos as $compromisso)    
    

            <p>
             <strong>&nbsp;Compromisso</strong> {{$compromisso->compromisso}}             
             <strong>&nbsp;&nbsp;Data</strong> {{$compromisso->data}}
             <strong>&nbsp;&nbsp;Hora</strong> {{$compromisso->hora}}
             <strong>&nbsp;&nbsp;Nota</strong> {{$compromisso->nota}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
             <a class="ocorrenciaDelButton mb-4" href="agenda/deleteCompromisso/{{$compromisso->id}}" style=" color: #dc3545; cursor: pointer;"><i class="fa-solid fa-trash"></i></a>&nbsp;&nbsp;

             <a class="ocorrenciaEditButton mb-4" onclick="alterarCompromisso();" style=" color: #ffc107; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>      
            </p><br>
           <div id="alterCompromisso" class="alter"></div>

                         
            @endforeach
                <h1><a class="nav-link"  data-bs-toggle="modal" href="#storeCompromisso" role="button">+</a></h1>
                @push('scripts')
  <script> 
  function alterarCompromisso(){
    var div = document.getElementById('alterCompromisso');
    if(div.innerHTML == ""){
       div.innerHTML= '<div id="form" class="formRemedioeCuidado"> <form method="post" action="agenda/editCompromisso/@isset($compromisso->id){{$compromisso->id}}@endisset">  @csrf <h3>Alterar compromisso</h3><label for="compromisso"> Novo Compromisso</label><br> <input type="text" name="compromisso" value="@isset($compromisso->compromisso){{$compromisso->compromisso}}@endisset" required ><br> <label for="data"> Nova Data</label><br><input type="date" name="data" value="@isset($compromisso->data){{$compromisso->data}}@endisset"  required><br><label for="hora">Novo Horario</label><br><input type="time" name="hora" value="@isset($compromisso->hora){{$compromisso->hora}}@endisset" required> <br> <label for="nota">Alguma observação?</label><br><input type="text" name="nota" value="@isset($compromisso->nota){{$compromisso->nota}}@endisset" > <br><br><input type="submit"  value="Alterar compromisso" class="btn-primary p10lr" style="margin-bottom: 10px;"><input type="button" class="btn-primary p10lr" value="Fechar" onclick="alterarCompromisso()"> </form>  </div> '

    }else{
      div.innerHTML='';

    }
  }
  </script>
@endpush