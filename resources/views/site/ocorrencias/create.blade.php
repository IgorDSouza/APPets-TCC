@extends('layout.default')
@push('links')
    <style>
        .bg-create{
            background-image: url(../imgHome/bg3-3.jpg) !important;
            width: 100%;
            height: 100vh;
        }

        .bg-filter{
            backdrop-filter: brightness(0.8);   
            width: 100%;
            height: 100vh;
        }

        .form{
            background-color: #447e605c;
            border: 1px solid black;
            border-radius: 10px;

        }
        .form-title{
            font-weight: bold;
            font-size: 56px;
            text-align: center;
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
            font-family: 'Lilita One', cursive !important;
            color: greenyellow;
        }
        .row-min-size{
            width: 450px;
            
        }

        .inputs{
            border-radius: 10px;
            padding: 8px;
            border: 1px solid black;
        }
        .mt-80{
            margin-top: 80px;
        }
    </style>
@endpush
@section('content')

    <div class="bg-create">
        
        <div class="bg-filter d-flex justify-content-center flex-column">
            <h1 class="mt-80 text-center form-title">Criar nova ocorrência</h1>
            <div class="form m-auto w-50">
                
                <form action="{{route('ocorrencia.store')}}" enctype="multipart/form-data" method="post" class="p-4">
                    @csrf
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-3 d-flex align-items-center">
                            <label for="foto_ocorrencia" class="fw-bold">Foto da ocorrência: </label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="foto_ocorrencia" accept="image/png, image/jpeg" required>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-3 d-flex align-items-center">
                            <label for="titulo_ocorrencia" class="fw-bold">Título da ocorrência: </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="titulo_ocorrencia" class="w-100 inputs">
                        </div>
                    </div>
                    <div class="row my-3 justify-content-center">
                        <div class="col-md-3">
                            <label for="conteudo_solucao" class="fw-bold">Conteúdo da ocorrência: </label>
                        </div>
                        <div class="col-md-8 justify-content-center">
                            <textarea name="conteudo_solucao" id="" cols="30" rows="5" class="w-100 inputs"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3 d-flex align-items-center">
                            <label for="tipo_ocorrencia" class="fw-bold">Tipo da ocorrência: </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="tipo_ocorrencia" class="w-100 inputs">
                        </div>
                    </div>
                    <div class="row my-3 justify-content-center">
                        <div class="col-md-11 d-flex justify-content-end">
                            <input type="submit" class="btn btn-success fw-bold" value="Salvar" style="width: 250px;">
                        </div>
            
                    </div>
                </form>
            </div>
    </div>
@endsection
