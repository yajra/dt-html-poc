<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel DataTables HTML POC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('scripts')
</head>
<body class="container">
<div class="row mt-4">
    <div class="col-md-12">
        @yield('content')
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@stack('scripts')
</body>
</html>
