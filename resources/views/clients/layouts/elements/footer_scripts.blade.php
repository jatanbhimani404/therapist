    <script src="{{ asset('chat-assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/libs/popper/popper.js') }}"></script>
    {{-- <script src="{{ asset('chat-assets/assets/vendor/js/bootstrap.js') }}"></script> --}}
    <script src="{{ asset('chat-assets/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('chat-assets/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/toastr/toastr.min.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('chat-assets/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('chat-assets/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    {{-- <script src="{{ asset('chat-assets/assets/js/app-chat.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            const $sidebar = $('#sidebar');
            const $toggleBtn = $('#toggleSidebar');

            // Collapse sidebar if screen < 992px on page load
            function handleInitialSidebarState() {
                if ($(window).width() < 992) {
                    $sidebar.addClass('collapsed');
                } else {
                    $sidebar.removeClass('collapsed'); // optional if you want it to expand again on resize
                }
            }

            // Toggle button click
            $toggleBtn.on('click', function() {
                $sidebar.toggleClass('collapsed');
                $(this).find('i').toggleClass('ti-chevron-right ti-chevron-left');
            });

            // Run on load
            handleInitialSidebarState();

            // Optional: Update on resize
            $(window).on('resize', handleInitialSidebarState);
        });
    </script>
