<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
            <img src="{{asset('frontend_assets')}}/img/logo.png" alt="Medicare Diagnostic Lab Logo" height="35" class="me-2">
            Medicare Diagnostic Lab
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('about')}}">About</a>
                </li>
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{route('services')}}">Diagnostic Services</a></li>
                        <li><a class="dropdown-item" href="{{route('ambulance')}}">Ambulance</a></li>
                        <li><a class="dropdown-item" href="{{route('pharmacy')}}">Pharmacy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
                </li>
                <!-- Management Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="managementDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Management
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="managementDropdown">
                        <li><a class="dropdown-item" href="{{route('management')}}">Management</a></li>
                        <li><a class="dropdown-item" href="{{route('staff')}}">Staff</a></li>
                        <li><a class="dropdown-item" href="{{route('shareholders')}}">Shareholders</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
            <a href="{{route('contact')}}#appointment" class="btn btn-primary btn-sm ms-lg-2">Book Appointment</a>
        </div>
    </div>
</nav>
