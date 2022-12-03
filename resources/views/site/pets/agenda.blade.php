@foreach($compromissos as $compromisso)    
           <p>
             <strong>compromisso</strong> {{$compromisso->compromisso}}
            
            @endforeach
                <h1><a class="nav-link"  data-bs-toggle="modal" href="#storeCompromisso" role="button">+</a></h1>
