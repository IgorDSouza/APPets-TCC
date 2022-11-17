<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada</title>
    <style>
        .d-flex{
            display: flex;
        }

        .flex-column{
            flex-direction: column;
        }

        .justify-content-center{
            justify-content: center;
        }

        .align-items-center{
            align-items: center;
        }

        .fs-32{
            font-size: 32px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .m-0{
            margin: 0;
        }

        .backToHome{
            text-decoration: underline;
            font-size: 20px;
            font-weight: 700;
            color: rgb(45, 206, 80);
            
        }
    </style>
</head>
<body style="overflow: hidden;">
    
    <div class="d-flex justify-content-center align-items-center" style="width: 100vw; position: absolute; top: 50%;">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h3 class="fs-32 m-0">Ops!! Página não encontrada 😢</h3>
            <a class="backToHome" href="{{ route('site.home') }}">Página Inicial</a>
        </div>
    </div>
</body>
</html>