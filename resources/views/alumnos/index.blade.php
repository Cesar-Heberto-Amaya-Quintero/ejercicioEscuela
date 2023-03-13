@extends('base')
    
@section('contenido')
    <h1>Lista de alumnos</h1>
        @if(Session::has('exito'))
            <p>{{Session::get('exito')}}</p>
        @endif
    
    <a href="{{route('alumnos.create')}}">Crear alumno</a>
    <table class="table table-hover"> 
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
                        <a class ="btn btn-primary btn-sm" href="{{route('alumnos.edit', $alumno->id)}}"> <i class="fa fa-edit"></i> </a>
                        <a class ="btn btn-danger btn-sm" href="{{route('alumnos.delete', $alumno->id)}}"> <i class="fa fa-times"> </i> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </thead>
    </table>
@endsection