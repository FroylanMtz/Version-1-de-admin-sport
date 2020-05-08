<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        
        <title>Admin Sports</title>

    </head>
    <body>
        <div class="container">
          <p> <b>Torneo: </b> {{$torneo[0]->nombre}} </p>
          <img src="{{ asset('torneos_imagenes/'. $torneo[0]->foto ) }}" width="100px" height="100px" alt="">
          <h1> Jornada {{$numeroJornada}} </h1>
          <p> <b>Arbitraje: $ </b> {{$torneo[0]->pago_arbitraje}} Pesos </p>

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th></th>
                <th></th>
                <th scope="col">Local</th>
                <th></th>
                <th scope="col">Visitante</th>
                <th> </th>

              </tr>
            </thead>
            <tbody>
              
              @foreach($jornadas as $jornada)
                <tr>
                  <td></td>
                  <td> <img src="{{ asset('equipos_imagenes/'. $jornada->flocal ) }}" width="50px" height="50px" alt=""> </td>
                  <td>{{ $jornada->local }}</td>
                  <td>vs</td>
                  <td>{{$jornada->visitante }}</td>
                  <td> <img src="{{ asset('equipos_imagenes/'. $jornada->fvisitante ) }}" width="50px" height="50px" alt=""> </td>

                </tr>
              @endforeach
              
            </tbody>
          </table>
          
        </div>
    </body>
</html>
