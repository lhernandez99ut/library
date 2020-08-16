@extends('template')

@section('contenido')
    <h2>Update Book</h2>

    <div>{{ $book }}</div><br>

    @if(session('mensaje'))
        <div>{{ session('mensaje') }}</div><br>
    @endif

    <form action="{{ route('save.book', $book->id ) }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Book's Name</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->name }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
            </div>
            <input type="text" name="editorial" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->editorial }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
            </div>
            <input type="text" name="author" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->author }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Genre</span>
            </div>
            <input type="text" name="genres" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->genres }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
            </div>
            <input type="text" name="country" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->country }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
            </div>
            <input type="text" name="year" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $book->year }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <br>

    <div><a href="{{ route('books') }}">Return</a></div>

@endsection