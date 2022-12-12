@extends('layout.default')

@section('content')
    <div class="conteiner">
        <a href="{{route('ocorrencia.create')}}" class="btn btn-outline-primary">Nova</a>
        <div class="row">
            @foreach ($ocorrencias as $ocorrencia)
                <div class="col-lg-4">
                    {{$ocorrencia->titulo_ocorrencia}}
                    {{$ocorrencia->tipo_ocorrencia}}
                    {{$ocorrencia->conteudo_solucao}}
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
