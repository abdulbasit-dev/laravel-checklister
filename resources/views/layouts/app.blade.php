<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- //perfect scrollbar --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" />
    <!-- CoreUI CSS -->
    <link rel="
    stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css"
        crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="c-app">

    {{-- SIDEBAR --}}
    @include('partials.sidebar')

    <div class="c-wrapper c-fixed-components">
        {{-- HEADER --}}
        @include('partials.header')
        <div class="c-body">
            <main class="c-main">

                @yield('content')

            </main>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
    {{-- ckeditor --}}
    <script src="{{ asset('frontend/js/ckeditor.js') }}"></script>
    @stack('scripts')
</body>

</html>
