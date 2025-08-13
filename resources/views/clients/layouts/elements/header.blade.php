<style>
    .header {
        height: 64px;
        border-bottom: 2px solid #e5e5e5;
        z-index: 0;
    }

    .header .btn-light {
        background: #A3BFD9;
        background: linear-gradient(90deg, rgba(163, 191, 217, 0) 0%, rgba(163, 191, 217, 1) 100%);
        border: none;
    }

    .header .btn-light:hover {
        background-color: #e6edf5;
    }

    .header .dropdown-menu {
        min-width: 180px;
    }

    .profile-img {
        position: relative;
        left: -20px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent header px-3">
    <div class="ms-auto d-flex align-items-center gap-3">
        <!-- Notification Button -->
        <button class="btn btn-light position-relative p-2 rounded-circle profile-btn shadow-sm">
            <i class="ti ti-bell text-black fs-5"></i>
            {{-- <span
                class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span> --}}
        </button>

        <!-- Profile Dropdown -->
        <div class="dropdown">
            <button class="btn btn-light rounded-pill py-0 shadow-sm" id="profileDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('chat-assets/assets/img/profile/profile-img.png') }}" alt="Profile"
                    class="rounded-circle profile-img" width="40" height="40">
                <span class="fw-medium small">Zota M.</span>
                <i class="ti ti-chevron-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
