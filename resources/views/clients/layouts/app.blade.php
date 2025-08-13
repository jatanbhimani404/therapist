<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('clients.layouts.elements.head')
    <style>
        body {
            background-color: #f9f6f1;
        }
    </style>
    <style>
        /* Content wrapper */
        .content-wrapper {
            margin-left: 250px;
            /* Same as sidebar width */
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        /* When sidebar is collapsed */
        .sidebar.collapsed~.content-wrapper {
            margin-left: 70px;
            /* Same as collapsed width */
        }

        /* Responsive adjustment for small screens */
        @media (max-width: 992px) {
            .content-wrapper {
                margin-left: 70px;
            }

            .sidebar.collapsed~.content-wrapper {
                margin-left: 70px;
            }
        }
    </style>
</head>

<body>
    @include('clients.layouts.elements.header')
    @include('clients.layouts.elements.sidebar')
    @yield('content')
    @include('clients.layouts.elements.footer_scripts')
    @yield('script')
</body>

</html>
