@extends('plantilla')

@section('contenido')

    <h2>Library Administration</h2>

    <br>
    <h3>Upload a Title</h3>

    @if(session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
    @endif

    <form action="{{ route('articulo.guardar') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
            </div>
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
            </div>
            <input type="text" name="author" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
            </div>
            <input type="text" name="category" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
            </div>
            <input type="text" name="year" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <hr>
    <br>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
        @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->title }}</td>
                    <td>{{ $articulo->author }}</td>
                    <td>{{ $articulo->category }}</td>
                    <td>{{ $articulo->year }}</td>
                    <td>
                        <form>
                            <a href="{{ route('editar.articulo', $articulo->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('eliminar.articulo', $articulo->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </form>
                    </td>                
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
