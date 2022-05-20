@extends('layout.main')
@section('content')
    <div class="container my-3 h-75">
        <h1 class="display-6 text-center">Eagle Moutain College</h1>
        <div class="col-md-8 offset-md-2 mt-5">
            <p class="text-center my-3">
                <i class='bx bxs-user bx-lg'></i>
            </p>
            <h1 class="fw-bold text-center my-3">Login</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="email" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="username" class="form-control" id="exampleFormControlInput1"
                       placeholder="">
            </div>
            <div>
                <button class="btn btn-primary">Sign In</button>
            </div>
        </div>
    </div>


@endsection