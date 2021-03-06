<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>JE DESIGN</title>
    
    {{-- css includes --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Slick-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    {{-- scripts --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    {{-- googlemaps scripts --}}
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 52.5698657, lng: -2.172433 },
                scrollwheel: false,
                zoom: 8,
                mapTypeControl: false,
                disableDefaultUI: true
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_API_KEY')}}&callback=initMap" async defer></script>
    {{-- slick --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
</body>
</html>