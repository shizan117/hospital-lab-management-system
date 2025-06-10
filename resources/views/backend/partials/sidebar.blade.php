<!-- [ Sidebar Menu ] start -->
<style>
    .pc-sidebar {
        height: 100vh; /* Full viewport height */
        overflow: hidden; /* Prevent sidebar itself from scrolling */
        position: fixed; /* Assuming sidebar is fixed; adjust if needed */
        width: 250px; /* Adjust based on your design */
    }
    .pc-sidebar .navbar-wrapper {
        height: 100%; /* Full height of sidebar */
        display: flex;
        flex-direction: column;
    }
    .pc-sidebar .m-header {
        flex-shrink: 0; /* Prevent header from shrinking */
        padding: 10px;
    }
    .pc-sidebar .navbar-content {
        flex-grow: 1; /* Take remaining space */
        min-height: 200px; /* Ensure minimum height to trigger scrollbar */
        max-height: calc(100vh - 70px); /* Adjust for header height (e.g., 50px + padding) */
        overflow-y: auto; /* Enable vertical scrolling when content overflows */
        padding-bottom: 20px; /* Prevent content from sticking to bottom */
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-link {
        color: #4A4A4A !important;
        transition: all 0.3s ease;
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-link:hover,
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-link.active {
        background-color: #F0F0F0 !important;
        border-left: 3px solid;
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item.pc-caption {
        color: #7A7A7A !important;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-submenu {
        background-color: #F5F5F5 !important;
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-submenu .pc-item .pc-link {
        color: #4A4A4A !important;
        padding-left: 40px !important;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-submenu .pc-item .pc-link:hover,
    .pc-sidebar .navbar-content .pc-navbar .pc-item .pc-submenu .pc-item .pc-link.active {
        background-color: #E0E0E0 !important;
    }
</style>
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary" style="display: block; text-align: center;">
                <img src="{{ asset('backend_assets/images/logo.png') }}" style="max-width: 40%; height: auto; display: block; margin: 0 auto;" alt="Medicare Diagnostic Lab">
            </a>
        </div>
        <hr style="margin-bottom: -10px;">
        <div class="mt-0 navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('admin.dashboard') }}" class="pc-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link {{ request()->routeIs('admin.doctors*') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fas fa-user-doctor"></i></span>
                        <span class="pc-mtext">Doctors</span>
                        <span class="pc-arrow"><i class="fas fa-angle-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.doctors') ? 'active' : '' }}" href="{{ route('admin.doctors') }}"><span class="pc-micon"><i class="fas fa-list-ul"></i></span>Doctor List</a></li>
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.doctors.create') ? 'active' : '' }}" href="{{ route('admin.doctors.create') }}"><span class="pc-micon"><i class="fas fa-user-plus"></i></span>Add Doctor</a></li>
                        <li class="pc-item">
                            <a class="pc-link {{ request()->routeIs('admin.doctors_categories') ? 'active' : '' }}" href="{{ route('admin.doctors_categories') }}">
                                <span class="pc-micon"><i class="fas fa-tags"></i></span>Doctor Categories
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <span class="pc-micon"><i class="ti ti-stethoscope"></i></span>
                    <label>Services</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link {{ request()->routeIs(['admin.services', 'admin.ambulance', 'admin.pharmacy']) ? 'active' : '' }}">
                        <span class="pc-micon"><i class="ti ti-stethoscope"></i></span>
                        <span class="pc-mtext">Services</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.services') ? 'active' : '' }}" href="{{ route('admin.services') }}"><span class="pc-micon"><i class="ti ti-test-pipe"></i></span>Diagnostic Services</a></li>
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.ambulance') ? 'active' : '' }}" href="{{ route('admin.ambulance') }}"><span class="pc-micon"><i class="ti ti-ambulance"></i></span>Ambulance</a></li>
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.pharmacy') ? 'active' : '' }}" href="{{ route('admin.pharmacy') }}"><span class="pc-micon"><i class="fas fa-prescription-bottle"></i></span>Pharmacy</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <span class="pc-micon"><i class="ti ti-users"></i></span>
                    <label>Management</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link {{ request()->routeIs(['admin.users', 'admin.staff', 'admin.shareholders']) ? 'active' : '' }}">
                        <span class="pc-micon"><i class="ti ti-users"></i></span>
                        <span class="pc-mtext">Management</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}"><span class="pc-micon"><i class="ti ti-user"></i></span>Users</a></li>
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.staff') ? 'active' : '' }}" href="{{ route('admin.staff') }}"><span class="pc-micon"><i class="fas fa-user-shield"></i></span>Staff</a></li>
                        <li class="pc-item"><a class="pc-link {{ request()->routeIs('admin.shareholders') ? 'active' : '' }}" href="{{ route('admin.shareholders') }}"><span class="pc-micon"><i class="fas fa-handshake"></i></span>Shareholders</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <span class="pc-micon"><i class="ti ti-cog"></i></span>
                    <label>Other</label>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.settings') }}" class="pc-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="ti ti-cog"></i></span>
                        <span class="pc-mtext">Settings</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <span class="pc-micon"><i class="ti ti-help"></i></span>
                    <label>Support</label>
                </li>
                <li class="pc-item mb-4">
                    <a href="{{ route('admin.support') }}" class="pc-link {{ request()->routeIs('admin.support') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="ti ti-help"></i></span>
                        <span class="pc-mtext">Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
