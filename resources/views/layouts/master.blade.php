<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="bg-brand-lighter font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('header_styles')

</head>
<body>

    <div id="app">
        @yield('body')
    </div>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('footer_scripts')
</body>
</html>
