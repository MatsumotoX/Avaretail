<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
    
 ██████╗██████╗ ██╗   ██╗██████╗ ████████╗ ██████╗ ██╗   ██╗ █████╗ ████████╗██╗ ██████╗ ███╗   ██╗██╗  ██╗
██╔════╝██╔══██╗╚██╗ ██╔╝██╔══██╗╚══██╔══╝██╔═══██╗██║   ██║██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║╚██╗██╔╝
██║     ██████╔╝ ╚████╔╝ ██████╔╝   ██║   ██║   ██║██║   ██║███████║   ██║   ██║██║   ██║██╔██╗ ██║ ╚███╔╝ 
██║     ██╔══██╗  ╚██╔╝  ██╔═══╝    ██║   ██║   ██║╚██╗ ██╔╝██╔══██║   ██║   ██║██║   ██║██║╚██╗██║ ██╔██╗ 
╚██████╗██║  ██║   ██║   ██║        ██║   ╚██████╔╝ ╚████╔╝ ██║  ██║   ██║   ██║╚██████╔╝██║ ╚████║██╔╝ ██╗
 ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚═╝        ╚═╝    ╚═════╝   ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝  ╚═╝ 
 
 If you're reading, we're hiring.
 https://www.CryptovationX.io/careers
 
 -->

        @include('landing_page._script')

        @include('landing_page._meta')

</head>

<body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5ZCBM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="royal_preloader"></div>

        @include('landing_page._navbar')

        @include('landing_page._top')


        @include('landing_page._vision')

        <section class="background-apple section-padding-top">
        @include('landing_page._robot')

        @include('landing_page._project')
    </section>




   


    <section class="background2 section-padding-top">
        @include('landing_page._howitwork')
    </section>

    <section class="background-arbi-r">
    @include('landing_page._press')
    </section>




        @include('partial_layout._footer')



        @include('landing_page._script2')

</body>

</html>