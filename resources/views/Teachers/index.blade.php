@extends('Template.Template')
@section('plantillaweb')
    <h2>Listado de profesores</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">direccion</th>
                <th scope="col">correo</th>
                <th scope="col">celular</th>
                <th scope="col">nivel_academico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $teacher->id }}</th>
                    <td>{{ $teacher->nombres }}</td>
                    <td>{{ $teacher->apellido }}</td>
                    <td>{{ $teacher->direccion }}</td>
                    <td>{{ $teacher->correo }}</td>
                    <td>{{ $teacher->celular }}</td>
                    <td>{{ $teacher->nivel_academico }}</td>
                    <td>
                        <a href="{{route('profesores.edit', $teacher->id) }}" class="btn btn-warning btn-sm" role="button"aria-disabled="true">Editar</a>
                    </td>

                <td>
                    <form action="{{route('profesores.destroy', $teacher->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>  
            
                    </form>
                    </tr>
            @endforeach

        </tbody>
    </table>
    {{ $teachers->links() }}
@endsection
