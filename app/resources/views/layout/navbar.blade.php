{{--        Navbar Start--}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('enroll')}}">Enrollment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{--    Navbar End--}}