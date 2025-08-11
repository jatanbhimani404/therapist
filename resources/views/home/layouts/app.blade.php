<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    @include('chat.layouts.elements.head')
</head>

<body>
    <!-- Layout wrapper -->
    {{-- <div class="layout-wrapper layout-content-navbar"> --}}
        {{-- <div class="layout-container"> --}}
            <!-- Menu -->


            <!-- / Menu -->

            <!-- Layout container -->
            {{-- <div class="layout-page"> --}}
                <!-- Navbar -->



                <!-- Content wrapper -->
                @yield('content')
                <!-- Content wrapper -->
            {{-- </div> --}}
            <!-- / Layout page -->
        {{-- </div> --}}

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        {{-- <div class="drag-target"></div> --}}
    {{-- </div> --}}
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    @include('chat.layouts.elements.footer_scripts')

    @yield('script')
</body>

</html>
