@extends('template')

@section('contenido')
    <h2>Update Student</h2>

    <div>{{ $student }}</div><br>

    @if(session('mensaje'))
        <div>{{ session('mensaje') }}</div><br>
    @endif

    <form action="{{ route('save.student', $student->id ) }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $student->name }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
            </div>
            <input type="text" name="lastname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $student->lastname }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">DNI</span>
            </div>
            <input type="text" name="dni" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $student->dni }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Career</span>
            </div>
            <input type="text" name="career" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $student->career }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
            </div>
            <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $student->address }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <br>

    <div><a href="{{ route('student') }}">Return</a></div>

@endsection