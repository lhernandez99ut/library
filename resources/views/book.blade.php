@extends('template')

@section('contenido')

    <br>
    <h3>Upload a Title</h3>

    @if(session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
    @endif

    <form action="{{ route('store.book') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Book's Name</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
            </div>
            <input type="text" name="editorial" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
            </div>
            <input type="text" name="author" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Genre</span>
            </div>
            <input type="text" name="genres" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Country</span>
            </div>
            <input type="text" name="country" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
                    <th>Book's Name</th>
                    <th>Editorial</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Country</th>
                    <th>Year</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
        @foreach($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->editorial }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genres }}</td>
                    <td>{{ $book->country }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        <form>
                            <a href="{{ route('edit.book', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.book', $book->id) }}" method="post">
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
