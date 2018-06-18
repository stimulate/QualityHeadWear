<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>   
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- <base href="http://dochyper.unitec.ac.nz/yuh46/asp_experiment/qc/public/" target="_self" /> --}}
    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->    
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.css" type ="text/css"/>
    <link rel="stylesheet" href="../css/site.css" type ="text/css"/>
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}" type ="text/css"/>

    <link rel="manifest" href="../site.webmanifest">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">  
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    
    <style>
        ul li {
            list-style: none;
        }

        ul .navController {
            display: block;
            left: 0;
            width: 100%;
        }

        .round {
            width: 180px;
            height: 180px;
            border: 8px solid lightcyan;
            border-radius: 180px;
            line-height: 100px;
            overflow: hidden;
            float: left;
        }        

        footer_container {
            width: 100%;
            position: relative;
            clear: both;
            zoom: 1
        }

        .footer_container:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            height: 0;
        }

        .footer {
            width: 980px;
            padding: 20px 5px 10px;
            margin: 0 auto;
            position: relative;
            zoom: 1
        }

            .footer:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                height: 0;
            }

        .footer_links {
            margin: 16px 0 20px;
            border-top: 1px solid #cac9c9;
            padding-top: 22px;
        }

            .footer_links h2 {
                display: none;
            }

            .footer_links li {
                display: inline-block;
                border-left: 1px solid #b9b8b8;
                padding: 0 8px;
            }

                .footer_links li:first-child {
                    border-left: none;
                    padding-left: 0;
                }

            .footer_links ul li a {
                text-decoration: none;
                font-size: 12px;
                line-height: 17px
            }

        .estar {
            width: 980px;
            padding: 10px 5px 20px;
            margin: 0 auto;
            clear: both;
            text-align: right;
        }

            .estar a {
                display: inline;
                font-size: 11px;
                text-decoration: none;
                color: #767676;
            }

                .estar a:hover {
                    color: #231f20;
                }

        .footer_content_top, .footer_content_bottom {
            width: 980px;
        }
    </style> 

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">                
                <a href="{{route('index')}}" class="navbar-brand" style="display :inline-flex; padding :0px"><img src="../images/logo.png" class="logo" style="width:50px; height:50px; margin-right:20px" /></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav mr-auto" >
                    
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    @if (auth()->check())
                        @if (auth()->user()->isAdmin())                                                
                        <li><a href="{{route('caps.index')}}">AdminCaps</a></li>                   
                        <li><a href="{{route('categories.index')}}">Category</a></li>
                        <li><a href="/admin/suppliers">Supplier</a></li>                    
                        <li><a href="/admin/orders">Order</a></li>    
                        @endif
                    @endif
                    
                        <li><a href="{{route('member')}}">Caps</a></li>
                        <li><a href="{{route('cart')}}">Cart</a></li>    
                        
                    
                                    
                                    
                    {{-- <li style="color:magenta;display :inline-flex; padding:14px;font-size:15px;" id="shopping"> Cart</li> --}}
                                      
                </ul>
            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" style="margin-left:200px;display:inline-flex;font-size:15px;padding:14px;">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item" style="padding-right:15px">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>                
        </div>
    </nav>
    @yield('content')    
        
            <footer>                
                <div class="footer_links">
                    <ul>                        
                        <li><a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1" target="_self">© Quality Cap™</a></li>
                        <li><a href="/stores" target="_self">stores &amp; stockists</a></li>
                        <li><a asp-area="" asp-controller="Home" asp-action="Contact">contact us</a></li>
                        <li><a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1" target="_self">gift voucher</a></li>
                        <li><a asp-area="" asp-controller="Home" asp-action="About">customer support</a></li>
                        <li><a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1" target="_self">delivery &amp; returns</a></li>
                        <li><a asp-area="" asp-controller="Home" asp-action="About">your privacy</a></li>
                        <li><a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1" target="_self">sitemap</a></li>
                    </ul>                    
                </div>
                <div class="footer_content_bottom">
                    <p><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></p>
                    <div class="social">
                        <span>&emsp;&emsp;&copy; 2018 - Quality Cap Inc. by Sabrina Yu. All rights reserved.&emsp;&emsp;</span>
                        <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1">
                            <i class="fa fa-facebook" aria-hidden="true">&nbsp;</i>
                        </a>
                        <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1"><i class="fa fa-instagram" aria-hidden="true">&nbsp;</i></a>
                        <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1"><i class="fa fa-twitter" aria-hidden="true">&nbsp;</i></a>
                        <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1">
                            <i class="fa fa-google-plus" aria-hidden="true">&nbsp;</i>
                        </a> <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1"><i class="fa fa-pinterest-p" aria-hidden="true">&nbsp;</i></a>
                        <a href="http://dochyper.unitec.ac.nz/yuh46/asp_application1"><i class="fa fa-linkedin" aria-hidden="true">&nbsp;</i></a>
                    </div>
                </div>
            </footer> 
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>   
            <script src="../lib/jquery/dist/jquery.js"></script>
            <script src="../lib/bootstrap/dist/js/bootstrap.js"></script>
            <script src="../js/site.js" asp-append-version="true"></script>

</body>
</html>
