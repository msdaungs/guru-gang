<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{-- bootstrap --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="welcome d-flex align-items-center justify-content-center">
        <div>
            <h1>GURU GANG</h1>
            <p>ATANG KAN LO LAWM A CHE.</p>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>
</body>

</html>