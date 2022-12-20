@extends('templade')
@section('title', 'showbook')
@section('body')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $book->NamaMahasiswa }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $book->Nim }}</h6>
            <p class="card-text">Student DOB {{ $book->DateOfBirth }}</p>
            <p> Student nim:{{ $book->Nim }}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

@endsection
