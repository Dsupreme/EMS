<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EMS</title>



	<!-- Fonts -->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" media="screen" />

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<nav class="nav-wrapper nav-color">
        <a class="brand-logo logo" style="padding-left: 1.5em">E.M.S</a>
        <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>-->
        <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
				<li><a href="{{ url('/auth/login') }}">Login</a></li>
				<li><a href="{{ url('/auth/register') }}">Register</a></li>
			@else
                <li><a href="{{ url('/') }}">Home</a></li>
			    <!-- Dropdown Trigger -->
		        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->username}}<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                <!--Dropdown<i class=""></i>-->
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>
                <script type="text/javascript">$(".dropdown-button").dropdown();</script>
			@endif

		</ul>
	</nav>

	@yield('content')

</body>
</html>
