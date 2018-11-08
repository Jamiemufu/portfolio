<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JE DESIGN</title>
    
    {{-- css includes --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{-- load css for todo --}}
    @if ($_SERVER['REQUEST_URI'] === '/todo') 
        <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
    @endif
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
            @include('includes.header')
    </header>

    @yield('content')
    
    <footer>
        @include('includes.footer')
    </footer>

    {{-- JS Scripts app.js includes bootstrap--}}
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/script.js') }}"></script>

</body>
</html>