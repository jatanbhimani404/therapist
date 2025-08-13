<style>
    .sidebar {
        width: 250px;
        height: 100vh;
        background: #A3BFD9;
        background: linear-gradient(180deg, rgba(163, 191, 217, 1) 0%, rgba(183, 214, 184, 1) 100%);
        transition: all 0.3s ease;
        position: fixed;
        top: 0.5rem;
        left: 0.5rem;
        margin-bottom: 0.5rem !important;
        overflow-y: auto;
        border-radius: 1rem;
        display: flex;
        flex-direction: column;
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE & Edge */
        z-index: 1;
    }

    .sidebar::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari */
    }

    .sidebar.collapsed {
        width: 70px;
    }

    .sidebar .nav-link {
        color: #000;
        font-weight: 500;
        padding-left: 0.8rem;
    }

    .sidebar .nav-link i {
        font-size: 1.2rem;
    }

    .sidebar.collapsed .nav-link span {
        display: none;
    }

    .sidebar.collapsed .nav {
        margin-top: 2rem;
    }

    .sidebar.collapsed .support-card {
        display: none;
    }

    .sidebar.collapsed .toggle-btn-wrapper {
        right: 17px;
    }

    .sidebar .nav-link.active {
        font-weight: 600;
        border-left: 3px solid black;
    }

    /* Support center card */
    .support-card {
        background: #fff;
        border-radius: 10px;
        padding: 10px;
        text-align: center;
    }

    .support-card img {
        width: 100%;
        border-radius: 8px;
    }

    /* Toggle button outside sidebar */
    .toggle-btn-wrapper {
        position: absolute;
        top: 15px;
        right: 16px;
    }

    .toggle-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: white;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: black !important;
        border: 5px solid #a7c0db;
        z-index: 2;
        position: fixed;
    }

    .toggle-btn i {
        font-size: 1rem;
        color: black;
    }

    /* Hide logo when collapsed */
    .sidebar.collapsed img {
        display: none;
    }
</style>

<!-- Sidebar -->
<div class="sidebar p-3" id="sidebar">
    <div class="d-flex align-items-center justify-content-between mb-4 logo">
        <img src="{{ asset('chat-assets/assets/img/logo/logo-white.png') }}" class="me-2" alt="Logo"
            style="max-height: 50px;">
        <div class="toggle-btn-wrapper">
            <button class="toggle-btn shadow text-black" id="toggleSidebar">
                <i class="ti ti-chevron-right"></i>
            </button>
        </div>
    </div>

    <ul class="nav flex-column gap-2">
        <li><a href="#" class="nav-link d-flex align-items-center active"><i
                    class="ti ti-layout-grid me-2"></i><span>Home</span></a></li>
        <li><a href="#" class="nav-link d-flex align-items-center"><i class="ti ti-users me-2"></i><span>Explore
                    Therapists</span></a></li>
        <li><a href="#" class="nav-link d-flex align-items-center"><i
                    class="ti ti-calendar-check me-2"></i><span>My Sessions</span></a></li>
        <li><a href="#" class="nav-link d-flex align-items-center"><i class="ti ti-notebook me-2"></i><span>Self
                    Assessment</span></a></li>
        <li><a href="#" class="nav-link d-flex align-items-center"><i
                    class="ti ti-credit-card me-2"></i><span>Billing & Payments</span></a></li>
    </ul>

    <div class="mt-auto" id="support-card-div">
        <div class="support-card mt-2">
            <img src="{{ asset('chat-assets/assets/img/support/support-img.png') }}" alt="Support">
            <h6 class="mt-2">Support Center</h6>
            <p class="text-muted small mb-2">Have a question? How can we help you</p>
            <button class="btn btn-light w-100"
                style="background: rgba(163, 191, 217, 0.4); background: linear-gradient(180deg, rgba(163, 191, 217, 0.39) 0%, rgba(163, 191, 217, 1) 100%);">Send
                a Message</button>
        </div>
    </div>
</div>
