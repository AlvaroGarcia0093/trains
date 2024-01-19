<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Tren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Crear tren</h1>
        <form action="{{ route('trains.store') }}" method="POST">
            @csrf
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            <label for="pasajeros" class="form-label">Pasajeros</label>
            <input type="number" name="pasajeros" id="pasajeros" class="form-control">
            <label for="anyo" class="form-label">Año</label>
            <input type="number" name="anyo" id="anyo" class="form-control">
            <label for="trainType">Tipo de tren</label>
            <select name="traintypes" id="traintypes">
                @foreach ($traintypes as $traintype)
                    <option value="{{$traintype -> id}}"> {{$traintype -> type}} </option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Crear Tren" class="btn btn-primary mt-2">
        </form>
    </div>
    <div class="container mt-2">
        <a href="{{ route('trains.index')}}" class="btn btn-dark">Volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>