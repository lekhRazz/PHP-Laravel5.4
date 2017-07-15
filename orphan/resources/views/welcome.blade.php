<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
         <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript" src="{{asset('js/imageslider.js')}}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
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
                            <li>
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

<div class="content">
<div class="imagesection">
    <div class="mask">
        <div class="slideset">
            <div class="main_image" style="background-image: url('{{asset('sliderimg/rare.jpg')}}');"></div>
            <div class="main_image" style="background-image: url('{{asset('sliderimg/orphan3.jpg')}}');"></div>
            <div class="main_image" style="background-image: url('{{asset('sliderimg/best.jpg')}}');"></div>
            <div class="main_image" style="background-image: url('{{asset('sliderimg/orphan4.jpg')}}');"></div>
            <div class="main_image" style="background-image: url('{{asset('sliderimg/orphan2.jpg')}}');"></div>
                    </div>
    </div>
    <div class="btnprevnext">
     <a href="#" class="btn-prev">&#10096</a>
        <a href="#" class="btn-next">&#10097</a>
    </div>

        <div class="pagination">
            <!-- pagination generated here -->
        </div>
</div>

</div>
</div>
    </body>
</html>
