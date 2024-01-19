<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TicketType</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><u>Tickets Type</u></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/trains') }}"> Trains </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/trainstype') }}"> Train Types </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tickets') }}"> Tickets </a>
                </li>
            </ul>
        </div>
    </nav>
    <table border="1" class="table">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
        </tr>
        @foreach ($ticketstype as $tickettype)
            <tr>
                <td> {{$tickettype -> id }} </td>
                <td> {{$tickettype -> type }} </td>
                <td>
                    <form action="{{ route('ticketstype.show',['ticketstype'=>$tickettype->id]) }}" method="get">
                        <input class="btn btn-dark" type="submit" value="Ver tipo de tren">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{url('/ticketstype/create')}}" class="btn btn-secondary">Crear tipo de ticket</a>
</body>
</html>