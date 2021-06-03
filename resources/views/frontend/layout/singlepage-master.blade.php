<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digimerlin</title>
    @include('frontend.layout.style')
</head>
<body class="defult-home">
    
    <div class="main-content">
        @include('frontend.layout.singlepage-header')
        @yield('content')                    
    </div>

    @include('frontend.layout.footer')
    @include('frontend.layout.script')
    
</body>
</html>