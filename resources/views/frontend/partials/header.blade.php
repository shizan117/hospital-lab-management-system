<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="{{asset('frontend_assets')}}/img/logo.png" alt="Medicare Diagnostic Lab Logo" height="40" class="me-2">
            Medicare Diagnostic Lab
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doctors.html">Doctors</a>
                </li>

                <!-- New Blog Nav Item -->
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>

                <!-- Management Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="managementDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Management
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="managementDropdown">
                        <li><a class="dropdown-item" href="staff.html">Management</a></li>
                        <li><a class="dropdown-item" href="staff.html">Staff</a></li>
                        <li><a class="dropdown-item" href="shareholders.html">Shareholders</a></li>
                    </ul>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="contact.html">Contact</a>--}}
{{--                </li>--}}
            </ul>
            <a href="contact.html#appointment" class="btn btn-primary ms-lg-3">Book Appointment</a>
        </div>
    </div>
</nav>
