<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing_page._script') 
    
    @include('landing_page._meta')
</head>

<body class="background-white">
    @include('landing_page._navbar') 

    @yield('content')
    @include('partial_layout._footer')
    <a href="https://goo.gl/fUaBMR" target="_blank">
        <i id="telegram" class="fab fa-telegram-plane fix-contact"></i>
    </a>

    @include('landing_page._script2')
   
</body>

</html>