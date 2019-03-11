<!DOCTYPE html>
<html lang="es">
<head>
    <title>Modelos</title>
    <meta name="charset" content="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">   
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css?v={{uniqid()}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="body body-index">
  
    <div id="floating-button">
        <p class="plus"> <span class="box"> <span class="bar top"></span> <span class="bar middle"></span> <span class="bar bottom"></span> </span>
        </p> <span class="face" style="background-image: url(/images/isotipo.svg);"></span></div>
    <div id="container-floating">
        <div class="container-floating-overview"></div>
        <div class="container-floating-background">
            <a href="" class="logo"> <img src="/assets/logo-white.svg" alt=""> </a>
            <ul>
                <li class="current first"> <a href="">INICIO</a></li>
                
            </ul>
           
        </div>
    </div>
    <div id="floating-search">
        <p class="plus"> <span class="box"> <span class="bar top"></span> <span class="bar middle"></span> <span class="bar bottom"></span> </span>
        </p> <span><i class="fa fa-search"></i></span></div>
    <div id="container-search">
        <div class="container-search-overview"></div>
        <div class="container-search-background">
            <div class="title">
                <h2>Encuentra tu <span>experiencia </span></h2></div>
            <form id="form-search-mobile">
                <input name="q" autocomplete="off" class="search-object" type="text" placeholder="Buscar" place="Nombre, Edad, Ubicación, Color de pelo, etc">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
   
    <div id="wrapper" {{{ (Request::is('/') ? 'class=capablur' : '') }}}>
        <header id="header-site">
            <div class="wrapper">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 text-right">
                                <div class="icons">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/" target="_blank"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/" target="_blank"> <i class="fa fa-youtube-play"></i> </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank"> <i class="fa fa-instagram"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cities" id="selectorInterior">
                                    <ul>

                                        <li class="locator"> <span>Lima</span>
                                            <ul>
                                                @foreach($regions as $region)
                                                <li> <a class="select-city" href="/{{ $region->name }}">{{$region->name}}</a></li>
                                                @endforeach   
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu">
                                    <ul>
                                        <li class="hightlight"><a href="/login">Ingresar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-logo">
                                <div class="logo">
                                    <a href="" class="desktop"> <img src="/assets/logo.svg" alt=""> </a>
                                    <a href="" class="mobile"> <img src="/assets/logo.svg" alt=""> </a>
                                </div>
                            </div>
                            <div class="col-md-9 col-menu">
                                <div class="menu text-right">
                                    <ul>
                                        <li class="current first"> <a href="">INICIO</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="cities" id="selectorInterior">
                                    <ul>
                                        <li> <span>Lima</span>
                                            <ul>
                                                <li class="city-active"> <a class="select-city" href="">Ciudad</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div id="page">
                @yield('content')
        </div>


        <footer id="footer-site">
            <div class="footer-social">
                <div class="icons">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"> <i class="fa fa-twitter"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/" target="_blank"> <i class="fa fa-youtube-play"></i> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" target="_blank"> <i class="fa fa-instagram"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="logo">
                            <a href=""> <img src="/assets/logo-footer.svg" alt="f"> </a>
                        </div>
                        <div class="menus">
                            <div class="menu">
                                <ul>
                                    <li><a href="">Inicio</a></li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                        <div class="text">
                            <p> Ipsum lorem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-text col-left">
                            <p>&copy;  Todos los derechos reservados | <a href="/sitemap" style="color: white;">Mapa del sitio</a></p>
                        </div>
                        <div class="col-md-6 col-text col-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
    <script src="/js/app.js?id=306adf279acaeb786185"></script>
    <script src="/js/actions.js?id={{ uniqid() }}"></script>
</body>

</html>