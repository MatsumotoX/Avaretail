@extends('partial_layout._navbarmain') @section('navbar_right') @if (Route::has('login'))
<div class="top-right links">
    @auth
    <!-- If logged in -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="../landing_page/landingpage.blade.php" data-id="home" class="scroll-link">Home</a>
            </li>

            <li>
                <a href="#media" data-id="media" class="scroll-link">White Paper</a>
            </li>

            <!-- <li>
                <a href="#timeline" data-id="timeline" class="scroll-link">Timeline</a>
            </li>

            <li>
                <a href="#team" data-id="team" class="scroll-link">Team</a>
            </li> -->

            <!-- <li>
                <a href="{{ action('PagesController@getKYC') }}">Verification</a>
            </li> -->

            <li>
                <!-- Show Username -->
                <a> {{ Auth::user()->name }}</a>
            </li>

            <li>
                <!-- Logout -->

                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>

            @else
            <!-- If logged out -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../landing_page/landingpage.blade.php" data-id="home" class="scroll-link">Home</a>
                    </li>
                    <li>
                        <a href="#media" data-id="media" class="scroll-link">White Paper</a>
                    </li>

                    <!-- <li>
                        <a href="#timeline" data-id="timeline" class="scroll-link">Timeline</a>
                    </li>

                    <li>
                        <a href="#team" data-id="team" class="scroll-link">Team</a>
                    </li> -->

                    <!-- <li>
                        <a href="{{ route('register') }}">Sign Up</a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}">Log In</a>
                    </li> -->

                </ul>
            </div>

            @endauth
    </div>
    @endif @endsection