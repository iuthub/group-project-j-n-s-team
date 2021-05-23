<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<section class="navigation" style="border-bottom: 1px solid rgb(229, 245, 11);">
    <div class="nav-container">
        <div class="brand">
            <a href="{{route('home')}}">MySchool</a>
        </div>
        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="{{route('home')}}" class="nav-item1">Home</a>
                </li>
                <li>
                    <a href="#" class="nav-item2">Schools</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{route('schools')}}">Schools</a>
                        </li>
                        <li>
                            <a href="{{route('president')}}">President Schools</a>
                        </li>
                        <li>
                            <a href="{{route('public')}}">Public Schools</a>
                        </li>
                        <li>
                            <a href="{{route('private')}}">Private schools</a>
                        </li>
                        <li>
                            <a href="{{route('special')}}">Special schools</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('apply')}}" class="nav-item3">Online Apply</a>
                </li>
                <li>
                    <a href="#" class="nav-item4">Subjects</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{route('class', 6)}}">6th class</a>
                        </li>
                        <li>
                            <a href="{{route('class', 7)}}">7th class</a>
                        </li>
                        <li>
                            <a href="{{route('class', 8)}}">8th class</a>
                        </li>
                        <li>
                            <a href="{{route('class', 9)}}">9th class</a>
                        </li>
                        <li>
                            <a href="{{route('class', 10)}}">10th class</a>
                        </li>
                        <li>
                            <a href="{{route('class', 11)}}">11th class</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('aboutus')}}" class="nav-item5">About us</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="nav-item5">Contact</a>
                </li>
                @auth
                    <li>
                        <a href="#" class="nav-item5">{{auth()->user()->name}}</a>
                    </li>
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="logout" style="background-color: transparent; border:0;">
                                Log Out
                            </button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li>
                        <a href="{{route('login')}}" class="nav-item6">Login</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="nav-item7">Register</a>
                    </li>
                @endguest
            </ul>


        </nav>
    </div>
</section>


@yield('content')
{{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}
{{-- <div id="preloader"></div> --}}

<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/counterup/jquery.counterup.js')}}"></script>
@yield('script')
</body>
</html>


