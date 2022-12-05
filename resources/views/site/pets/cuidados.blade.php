<h3>Cuidados</h3>
            @foreach($cuidados as $cuidado)

            <div id="alterCuidado" class="alter"></div>
            
           <p>
             <strong>Cuidados</strong> {{$cuidado->observacao}}

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a class="ocorrenciaDelButton mb-4" href="cuidados/deleteCuidado/{{$cuidado->id}}" style=" color: #dc3545; cursor: pointer;"><i class="fa-solid fa-trash"></i></a>&nbsp;&nbsp;

             <a class="ocorrenciaEditButton mb-4" onclick="alterarCuidado();" style=" color: #ffc107; cursor: pointer;"><i class="fa-solid fa-pen"></i></a>      
            </p><br>
         
           @endforeach
           <h1><a class="nav-link"  data-bs-toggle="modal" href="#storeCuidado" role="button">+</a></h1>

           @push('scripts')
  <script> 
   function alterarCuidado(){
    var div = document.getElementById('alterCuidado');
   

    if(div.innerHTML == ""  ){
       div.innerHTML= '<div id="form" class="formRemedioeCuidado"> <form method="post" action="cuidados/editCuidado/@isset($cuidado->id){{$cuidado->id}}@endisset">  @csrf <h3>Alterar Cuidado</h3><label for="cuidado"> Descreva o novo Cuidado Especial</label><br><input type="text" name="cuidado" value="@isset($cuidado->observacao){{$cuidado->observacao}}@endisset" required><br> <input type="submit"  value="Alterar Cuidado" class="btn-primary p10lr" style="margin-bottom: 10px;"><input type="button" class="btn-primary p10lr" value="Fechar"  onclick="alterarCuidado()"></form></div> '
      


    }else{
      div.innerHTML='';

    }
   }
  </script>
@endpush