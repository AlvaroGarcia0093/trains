<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detalles de tickets</h1>
        <table class="table">
            <p>Fecha de tickets {{$ticket -> date}} </p>
            <p>Precio de tickets {{$ticket -> price}} </p>
            <p>Id de tren de tickets {{$ticket -> train_id}} </p>
            <p>Id de tipo de tickets {{$ticket -> ticket_types_id}} </p>
        </table>
    </div>
    <form action="{{ route('tickets.edit',['ticket'=>$ticket->id]) }}" method="get">
        <input class="btn btn-dark" type="submit" value="Editar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>