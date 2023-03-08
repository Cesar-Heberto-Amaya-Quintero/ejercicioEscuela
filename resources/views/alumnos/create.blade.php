<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear alumno</title>
</head>
<body>
    <h1> Crear alumno </h1>
    <a href="{{route('alumnos.index')}}">Volver a la lista de alumnos</a>
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Carrera:</label>
            <select name="carrera">
                <option value="" selected disabled>Elige una carrera</option>
                @foreach ($carreras as $carrera)
                    <option value="{{$carrera->id}}" >{{$carrera->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Crear alumno</button>
        </div>
    </form>

</body>
</html>