<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de alumnos</h1>
    <a href="{{route('alumnos.create')}}">Crear alumno</a>
    <table> 
        <thead>
            <tr>
                <th> Nombre</th>
                <th>Acciones</th>
            </tr>
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>
                        <a href="{{route('alumnos.edit', $alumno->id)}}">Editar</a>
                        <button>Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </thead>
    </table>
    
</body>
</html>