@extends('template')

@section('contenido')

    <br>
    <h3>Student Form</h3>

    @if(session('mensaje'))
        <div class="alert alert-info">
            {{session('mensaje')}}
        </div>
    @endif

    <form action="{{ route('store.student') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
            </div>
            <input type="text" name="lastname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">DNI</span>
            </div>
            <input type="text" name="dni" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Career</span>
            </div>
            <input type="text" name="career" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
            </div>
            <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <hr>
    <br>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>DNI</th>
                    <th>Career</th>
                    <th>Address</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
        @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->dni }}</td>
                    <td>{{ $student->career }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <form>
                            <a href="{{ route('edit.student', $student->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete.student', $student->id) }}" method="post">
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
