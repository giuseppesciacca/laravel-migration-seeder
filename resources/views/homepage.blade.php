<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light p-5">
        <div class="container">                

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">In partenza da</th>
                        <th scope="col">In arrivo da</th>
                        <th scope="col">In partenza alle ore</th>
                        <th scope="col">In arrivo alle ore</th>
                        <th scope="col">Codice treno n°</th>
                        <th scope="col">Numero di carrozze</th>
                    </tr>
                </thead>

                <tbody>

                @forelse ($trains as $train)
                  <tr>
                    <td scope="row">{{$train['azienda']}}</td>
                    <td>{{$train['stazione_di_partenza']}}</td>
                    <td>{{$train['stazione_di_arrivo']}}</td>
                    <td>{{$train['orario_di_partenza']}}</td>

                    <td>{{$train['orario_di_arrivo']}}</td>
                    <td>{{$train['codice_treno']}}</td>
                    <td>{{$train['numero_carrozze']}}</td>
                  </tr>

                  @empty
                  <p>No trains</p>
                </tbody>
            </table>
            @endforelse   

        </div>
    </main>

</body>

</html>