<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles')
</head>
<body>
    <nav>
        <a href="{{ route('index') }}" class="logo">
            Auto
        </a>
        <ul>
            <li>
                <a href="{{ route('auto.create') }}">Adauga</a>
            </li>
            <li>
                <a href="{{ route('auto.index') }}">Afiseaza</a>
            </li>
        </ul>
    </nav>
    <div id="app">
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>