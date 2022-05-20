@extends('layout.main')
@section('content')
    <div class="container">
        <h1 class="text-center fw-bold">Enrollment Form</h1>
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-3">Student Information</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                <input type="email" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E Mail</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                <input type="date" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="number" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Guardian Name</label>
                <input type="email" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Guardian Phome</label>
                <input type="email" name="username" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <textarea type="email" name="username" class="form-control"
                          id="exampleFormControlInput1"></textarea>
            </div>

            <h1 class="text-center">Registration Date</h1>
            <p class="text-center offset-md-3 mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dignissimos, harum incidunt
                iure reiciendis voluptatem. Accusantium architecto atqu
            </p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Courses</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Payment Type</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">KBZ</option>
                    <option value="2">CB</option>
                    <option value="3">Wave Money</option>
                </select>
            </div>

            <div class="my-3 text-end">
                <button class="btn btn-danger">Cancel</button>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
@endsection