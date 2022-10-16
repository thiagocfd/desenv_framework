<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de produtos</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

            <br>
            <h1>Produtos Novos</h1>

                <table class="table table-responsive table-striped table-dark mt-4">
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                    </tr>
                        @foreach ( $produtos as $produto )
                            @if ($produto['novo'] == true)
                                <tr>
                                    <td>{{ $produto['nome'] }}</td>
                                    <td>{{ $produto['categoria'] }}</td>
                                    <td>R$ {{ $produto['preco'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                </table>

                <br>
                <h1>Produtos Usados</h1>

                <table class="table table-responsive table-striped table-dark mt-4">
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                    </tr>
                        @foreach ( $produtos as $produto )
                            @if ($produto['novo'] == false)
                                <tr>
                                    <td>{{ $produto['nome'] }}</td>
                                    <td>{{ $produto['categoria'] }}</td>
                                    <td>R$ {{ $produto['preco'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                </table>


            </div>
        </div>
    </div>

</body>
</html>
