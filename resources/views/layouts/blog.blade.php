<!DOCTYPE html>
<html lang="en">

<head>
    @include('blog._meta')

	@include('blog._script')

</head>

<body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70" style="padding-top:60px;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5ZCBM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- <div id="royal_preloader"></div> -->

    @include('blog._navbarblog')

    @yield('content')

    <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
    <i class="fab fa-telegram-plane fix-contact"></i>
    
    </a>


    @include('blog._script2')

</body>

</html>
