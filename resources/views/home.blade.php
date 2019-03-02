@extends('layouts.registration')

@section('content')

<form method="POST" action="{{ route('register') }}">

<a href="{{ action('PagesController@getIndex') }}">
	<img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/ogos/only-c.png" class="logo-login">
</a>
<br>
<br>
<br>

@csrf

	<script type="text/javascript" src="js/login_success_loading.js"></script>
	<h1 style="color: white; !important">Log in Successfully!!</h1>
	<br>

	<p>This page will be redirect in <span id="counting">2</span> second</p>


</form>

@endsection
