<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de veiculos</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <tr>
                        <th>Fabricante</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Cor</th>
                    </tr>

                    @if (count($veiculos) > 0)
                        @foreach ( $veiculos as $veiculo )
                        <tr>
                            <td>{{ $veiculo['fabricante'] }}</td>
                            <td>{{ $veiculo['modelo'] }}</td>
                            <td>{{ $veiculo['ano'] }}</td>
                            <td>{{ $veiculo['cor'] }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-warning">
                                    Não há veículos nessa categoria
                                </div>
                            </td>
                        </tr>
                    @endif
                </table>

            </div>
        </div>
    </div>

</body>
</html>
 