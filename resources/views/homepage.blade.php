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

    <main class="bg-light">
        <div class="container">
            @forelse ($trains as $train)
            <ul>
                <li>Azienda: {{$train['azienda']}}</li>
                <li>In partenza da: {{$train['stazione_di_partenza']}}</li>
                <li>In arrivo da: {{$train['stazione_di_arrivo']}}</li>
                <li>In partenza alle ore: {{$train['orario_di_partenza']}}</li>
                <li>In arrivo alle ore: {{$train['orario_di_arrivo']}}</li>
                <li>Codice treno n°: {{$train['codice_treno']}}</li>
                <li>Numero di carrozze: {{$train['numero_carrozze']}}</li>
            </ul>
                
            @empty
            <p>No trains</p>
                
            @endforelse
           


        </div>
    </main>

</body>

</html>