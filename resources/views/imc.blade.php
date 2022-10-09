<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

@if($imc > 18.4 && $imc < 25)

    <div class="alert alert-success" role="alert">
        Normal
    </div>

@elseif ($imc > 24.9 && $imc < 30)

    <div class="alert alert-danger" role="alert">
        Sobrepeso
    </div>

@elseif ($imc > 30 && $imc < 40)

    <div class="alert alert-danger" role="alert">
        Obesidade
    </div>

@elseif ($imc > 40 )

    <div class="alert alert-danger" role="alert">
        Obesidade Grave
    </div>

@endif

</body>
</html>
