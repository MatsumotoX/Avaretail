@extends('partial_layout._navbarmain') @section('navbar_right') @if (Route::has('login'))
<div class="top-right links">
    @auth
    <!-- If logged in -->
    <div class="collapse navbar-collapse" id="navbar-top-toggle">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#home" data-id="home">Home</a>
            </li>

            <li>
                <a href=" {{ asset('DGC.pdf') }} " id="White Paper Bar" target="_blank" data-id="media">How it works</a>
            </li>

            <!-- <li>
                <a href="{{ action('PagesController@getBlog') }}" id="blog">Blog</a>
            </li> -->

            

            <li>
                <!-- Logout -->

                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    Logoutt
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>

            @else
            <!-- If logged out -->
            <div class="collapse navbar-collapse" id="navbar-top-toggle">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/" id="Home">Home</a>
                    </li>
                    <li>
                        <a href=" {{ asset('DGC.pdf') }} " id="White Paper Bar" target="_blank">How it works</a>
                    </li>

                    <!-- <li>
                        <a href="#features" >Features</a>
                    </li> -->

                    <li>
                        <a href="#return">Performance</a>
                    </li>

                    <!-- <li>
                    <a href=" http://localhost:8000/contact-us " id="contact" target="_blank">Contact</a>
                    </li> -->

                    
                    



                </ul>
            </div>

            @endauth
    </div>
    @endif @endsection