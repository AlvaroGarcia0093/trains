<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Crear tickets</h1>
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <label for="date" class="form-label">Fecha</label>
            <input type="text" name="date" id="date" class="form-control">
            <label for="price" class="form-label">Precio</label>
            <input type="number" name="price" id="price">
            <br>
            <label for="train" class="form-label">Tren</label>
            <select name="train" id="train">
                @foreach ($trains as $train)
                    <option value="{{$train -> id}}"> {{$train -> nombre}} </option>
                @endforeach
            </select>
            <br>
            <label for="ticketType">Tipo de ticket</label>
            <select name="tickettype" id="tickettype">
                @foreach ($ticketstype as $tickettype)
                    <option value="{{$tickettype -> id}}"> {{$tickettype -> type}} </option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Crear Ticket" class="btn btn-primary mt-2">
        </form>
    </div>
    <div class="container mt-2">
        <a href="{{ route('tickets.index')}}" class="btn btn-dark">Volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>