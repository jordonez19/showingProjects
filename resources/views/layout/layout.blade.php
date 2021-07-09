<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- title --}}
    <title>@yield('title')</title>
    {{-- styles --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- script --}}
    <script src="{{ mix('js/app.js' )}}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between ">
        <header>
            @include('layout.partials.nav')
        </header>

        <main class="py-3">
            @yield('content')
        </main>

        <footer class="bg-white text-center  text-black-50 py-3 shadow ">
            {{ config('app.name') }} | copyright @ {{ date('Y') }}
        </footer>

    </div>

</body>
</html>

