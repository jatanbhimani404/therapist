<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.layouts.elements.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    @include('home.layouts.elements.header')
    @include('home.layouts.elements.hero')
    @include('home.layouts.elements.stats')
    @include('home.layouts.elements.trusted')
    @include('home.layouts.elements.about')
    @include('home.layouts.elements.whoweare')
    @include('home.layouts.elements.faq')
    @include('home.layouts.elements.blog')
    @include('home.layouts.elements.testimonials')
    @include('home.layouts.elements.cta')
    @include('home.layouts.elements.footer')
</body>
@include('home.layouts.elements.footer_scripts')


</html>
