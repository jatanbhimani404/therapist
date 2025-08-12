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
            $(".owl-carousel").owlCarousel({
                items: 3,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    922: {
                        items: 3
                    }
                }
            });
        });
    </script>
