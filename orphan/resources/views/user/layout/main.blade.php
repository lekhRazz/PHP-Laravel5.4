<!DOCTYPE html>
<html>
<head>
	<title>memberpage</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="{{ asset('js/app.js') }}"></script>

    	<script type="text/javascript" src="{{asset('js/imageslider.js')}}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        

</head>
<body>
<div class="container">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                             <li class="dropdown">
                                <a href="{{route('admin.dashboard')}}">Admin</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/home/userprofile?id={{Auth()->user()->id}}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                    
                    
<header>
<div class="address">


	<?php 
    use App\Organization;
    $org=Organization::all();
     ?>


     @foreach($org as $orgs)
	<div class="logo">
		<a href="/"><img class ="img" src="{{asset('family_banner.png')}}" alt="logo"></a>
	</div>
	<div class="logo_title">
		<div class=   "maintitle">
			<a href="/"><h1>{{$orgs->org_name}}</h1></a>
			<div class="addresstitle"><h6>{{$orgs->org_address}}&nbsp;Tel.{{$orgs->org_phone}}</h6>

            <h6>Email:{{$orgs->org_email}}</h6>
        </div>
	</div>
		<nav>
			<ul>
				<li><a href="/"><span>Home</span></a></li>
				<li>|</li>
				<li><a href="/home/aboutus"><span>About Us</span></a></li>
				<li>|</li>
				<li><a href="/home/gallery"><span>Gallery</span></a></li>
				<li>|</li>
				<li><a href="/home/waitingchild"><span>Waiting Childs</span></a></li>
				<li>|</li>
				<li><a href="/home/register"><span>Register</span></a></li>
				<li>|</li>
				<li><a href="/home/member"><span>Members</span></a></li>
				<li>|</li>
				<li><a href="/home/donation"><span>Donation</span></a></li>
			</ul>
		</nav>
	</div>	
    @endforeach
</div>
	

</header>
 @yield('content')
 
</div>
</body>
</html>