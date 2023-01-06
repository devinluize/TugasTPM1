@extends('templade')

@section('title', 'welcome')

@section('body')
    @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            {{-- <div class="card-body">
                <div style="direction: line">
                    <p>Mahasiswa:</p>
                    <h1>{{ $book->id }}</h1>
                </div>
                <h5 class="card-title">{{ $book->NamaMahasiswa }}</h5>
                <p class="card-text">{{ $book->Nim }}</p>
                <p class="card-text">{{ $book->DateOfBirth }}</p>
                <p class="card-text">{{ $book->Semester }}</p>
                <a href="/show-book/{{ $book->id }}" class="btn btn-primary">See detail</a>
            </div>
        </div> --}}
            <div class="card" style="width: 18rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <h5 class="card-title">{{ $book->NamaMahasiswa }}</h5>
                    <p class="card-text">{{ $book->Nim }}</p>
                    <p class="card-text">{{ $book->DateOfBirth }}</p>
                    <p class="card-text">{{ $book->Semester }}</p>
                    <a href="/show-book/{{ $book->id }}" class="btn btn-primary">See detail</a>
                    <a href="{{ route('edit', $book->id) }}" class="btn btn-success">edit</a>
                    <form action="/delete-book/{{ $book->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">delete</button>
                    </form>
                </div>
            </div>
    @endforeach
@endsection
