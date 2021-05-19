<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <center>
    <h1> Lista de paises </h1>
    </center>

    <table class= "table table-hover table table-bordered table table-active">
        <tr>
            <th class= "text-primary">Nombre</th>
            <th class= "text-warning">Capital</th>
            <th class= "text-danger">Moneda</th>
            <th class= "text-success">Poblacion</th>
        </tr>

        @foreach ($naciones as $nombre => $nacion )
            <tr>
                <td class="table info"> {{ $nombre }}</td>
                <td class="table info"> {{ $nacion [ "capital"]}}</td>
                <td class="table info"> {{ $nacion [ "moneda"]}}</td>
                <td class="table info"> {{ $nacion [ "poblacion"]}}</td>
            <tr>
        @endforeach
    </table>
</body>
</html>
