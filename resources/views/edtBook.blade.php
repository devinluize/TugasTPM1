@extends('template')

@section('title', 'edit book')

@section('body')

    <form action="/update-book/{{ $book->id }}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NamaMahasiswa</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"
                value="{{ $book->NamaMahasiswa }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NamaMahasiswa</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="author"
                value="{{ $book->Nim }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nim</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="stock"
                value="{{ $book->Semester }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">DateOfBirth</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="publishDate"
                value="{{ $book->DateOfBirth }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
