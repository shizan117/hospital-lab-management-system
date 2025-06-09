
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ffffff;
        padding: 10px 20px;
        color: #fff;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .logo {
        font-size: 1.5em;
        font-weight: bold;
    }

    nav {
        display: flex;
        gap: 20px;
        position: relative;
    }

    nav a {
        color: black;
        text-decoration: none;
        font-size: 1em;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #0081cd;
    }

    .menu-toggle {
        display: none;
        font-size: 1.5em;
        cursor: pointer;
    }

    /* Dropdown Menu */
    .dropdown {
        position: relative;
    }

    .dropdown-content {
        color: black;
        display: none;
        position: absolute;
        background-color: #ffffff;
        top: 25px;
        min-width: 180px;
        border: 1px solid #e2e8f0; /* Light gray border */
        border-radius: 5px;
        overflow: hidden;
        z-index: 999;
        flex-direction: column;
    }

    .dropdown-content a {
        padding: 10px 15px;
        display: block;
        color: black;
    }

    .dropdown-content a:hover {
        background-color: #f5f5f5;
    }

    .dropdown:hover .dropdown-content {
        display: flex;
    }

    @media (max-width: 768px) {
        nav {
            display: none;
            flex-direction: column;
            background-color: #ffffff; /* white like laptop */
            position: absolute;
            top: 60px;
            right: 20px;
            width: 220px;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        nav.active {
            display: flex;
        }

        .menu-toggle {
            display: block;
        }

        nav a {
            color: black; /* black text in mobile too */
        }

        .dropdown-content {
            position: relative;
            top: 0;
            background-color: #ffffff; /* white like desktop */
            border: 1px solid #e2e8f0;
        }
        .dropdown:hover .dropdown-content {
            display: flex;
        }
    }
</style>

<header>
    <div class="logo"> <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
            <img src="{{asset('frontend_assets')}}/img/logo.png" alt="Medicare Diagnostic Lab Logo" height="35" class="me-2">
            Medicare Diagnostic Lab
        </a></div>
    <div style="color: black; border: 1px solid #ccc; padding: 5px 10px; border-radius: 5px;" class="menu-toggle" onclick="toggleMenu()">☰</div>

    <nav id="nav-menu">
        <a  href="{{route('home')}}">Home</a>
        <a  href="{{route('about')}}">About</a>

        <div class="dropdown">
            <a href="#">Services ▾</a>
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{route('services')}}">Diagnostic Services</a>
                <a class="dropdown-item" href="{{route('ambulance')}}">Ambulance</a>
                <a class="dropdown-item" href="{{route('pharmacy')}}">Pharmacy</a>
            </div>
        </div>
        <a href="{{route('doctors')}}">Doctors</a>

        <div class="dropdown">
            <a href="#">Management ▾</a>
            <div class="dropdown-content">
                <a class="dropdown-item" href="{{route('management')}}">Management</a>
                <a class="dropdown-item" href="{{route('staff')}}">Staff</a>
                <a class="dropdown-item" href="{{route('shareholders')}}">Shareholders</a>
            </div>
        </div>
        <a href="{{route('contact')}}">Contact</a>
        <a href="{{route('contact')}}#appointment" class="btn btn-primary btn-sm ms-lg-2 mb-3">Book Appointment</a>

    </nav>
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('active');
    }
</script>

