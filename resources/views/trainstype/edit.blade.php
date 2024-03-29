<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tipos de tren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar tipos de tren</h1>
        <form action="{{ route('trainstype.update', ['trainstype'=>$traintype->id]) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label for="type" class="form-label">Tipo de tren</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $traintype->type }}">
            <input type="submit" value="Editar tipo de tren" class="btn btn-primary mt-2">
        </form>
    </div>
    <div class="container mt-2">
        <a href="{{ route('trainstype.index')}}" class="btn btn-dark">volver a inicio</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>