@extends('layout.default')
<style>
    .imgCard{
        background-repeat: no-repeat;
        background-size: cover;
        width: 200px;
        height: 200px;
        border-radius: 100%;
        border: 1px solid black;
    }
</style>
@section('content')
    <div class="container">
        <h1>Preencha os campos abaixo para criar uma nova ocorrência</h1>
        <form action="{{route('ocorrencia.update',$ocorrencia->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="foto_ocorrencia">Foto da ocorrência: </label>
                </div>
                <div class="col-md-4">
                    <div class="imgCard" style="background-image: url('../../imgOcorrencias/ocorrencias/{{$ocorrencia->foto_ocorrencia}}') ">
                        {{-- <img class="d-block m-l-r borda " src="/imgOcorrencias/ocorrencias/{{$ocorrencia->foto_ocorrencia}}"  alt="Imagem de capa do card" >  --}}
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="file" name="foto_ocorrencia" accept="image/png, image/jpeg">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="titulo_ocorrencia">Título da ocorrência: </label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="titulo_ocorrencia" class="w-50" value="{{$ocorrencia->titulo_ocorrencia}}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-2">
                    <label for="conteudo_solucao">Conteúdo da ocorrência: </label>
                </div>
                <div class="col-md-8">
                    <textarea name="conteudo_solucao" id="" cols="30" rows="5" class="w-50">{{$ocorrencia->conteudo_solucao}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="tipo_ocorrencia">Tipo da ocorrência: </label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="tipo_ocorrencia" class="w-50" value="{{$ocorrencia->tipo_ocorrencia}}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-6 d-flex justify-content-end pe-0">
                    <input type="submit" class="btn btn-outline-success" value="Salvar">
                </div>
                
            </div>
        </form>
    </div>
@endsection
