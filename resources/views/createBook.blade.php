@extends('templade')
@section('title', 'create book')
@section('body')
    <div class="m-5">
        <form action="/store-book" method="POST">
            @csrf
            <h1 class="text-center">New Student</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NamaMahasiswa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="NamaMahasiswa">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="DateOfBirth">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nim</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Nim">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Semester</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Semester">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
