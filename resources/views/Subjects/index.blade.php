@extends('Template.Template')
@section('plantillaweb')
    <h2>Listado de Materias</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Creditos</th>
                <th scope="col">Precio</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <th scope="row">{{ $subject->id }}</th>
                    <td>{{ $subject->nombre }}</td>
                    <td>{{ $subject->creditos }}</td>
                    <td>{{ $subject->costo }}</td>
                    
                     
                    </td>

                <td>
                    <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('materias.destroy', $subject) }}" class="btn btn-danger btn-sm" role="button"aria-disabled="true">ELIMINAR</a>
                        <a href="{{route('materias.edit', $subject) }}" class="btn btn-warning btn-sm" role="button"aria-disabled="true">EDITAR</a>
                    </form>
                    </tr>
            @endforeach

        </tbody>
    </table>
    {{ $subjects->links() }}
@endsection
