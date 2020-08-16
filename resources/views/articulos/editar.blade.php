@extends('plantilla')

@section('contenido')
    <h2>Update Book</h2>

    <div>{{ $articulo }}</div><br>

    @if(session('mensaje'))
        <div>{{ session('mensaje') }}</div><br>
    @endif

    <form action="{{ route('guardar.articulo', $articulo->id ) }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
            </div>
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $articulo->title }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
            </div>
            <input type="text" name="author" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $articulo->author }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
            </div>
            <input type="text" name="category" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $articulo->category }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
            </div>
            <input type="text" name="year" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $articulo->year }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <br>

    <div><a href="{{ route('articulos') }}">Return</a></div>

@endsection