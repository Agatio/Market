<!DOCTYPE html>
<html>
    <head>
        <title>Cesi Market</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!--style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style-->
        <!--link href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"-->
        <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/menu.js') }}"></script>
    </head>
    <body>
        <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cesi Market</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>				
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Men Collection</li>                            
                                <div id="menCollection" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Summer dress floral prints</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Denin jacket stamped</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                    </div><!-- End Item -->                                
                                  </div><!-- End Carousel Inner -->
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div><!-- /.carousel -->
                                <li class="divider"></li>
                                <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Features</li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Carousel Control</a></li>
                                <li><a href="#">Left & Right Navigation</a></li>
                                <li><a href="#">Four Columns Grid</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Fonts</li>
                                <li><a href="#">Glyphicon</a></li>
                                <li><a href="#">Google Fonts</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Plus</li>
                                <li><a href="#">Navbar Inverse</a></li>
                                <li><a href="#">Pull Right Elements</a></li>
                                <li><a href="#">Coloured Headers</a></li>                            
                                <li><a href="#">Primary Buttons & Default</a></li>							
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Much more</li>
                                <li><a href="#">Easy to Customize</a></li>
                                <li><a href="#">Calls to action</a></li>
                                <li><a href="#">Custom Fonts</a></li>
                                <li><a href="#">Slide down on Hover</a></li>                         
                            </ul>
                        </li>
                    </ul>				
                </li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>				
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Features</li>
                                <li><a href="#">Auto Carousel</a></li>
                                <li><a href="#">Carousel Control</a></li>
                                <li><a href="#">Left & Right Navigation</a></li>
                                <li><a href="#">Four Columns Grid</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Fonts</li>
                                <li><a href="#">Glyphicon</a></li>
                                <li><a href="#">Google Fonts</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Plus</li>
                                <li><a href="#">Navbar Inverse</a></li>
                                <li><a href="#">Pull Right Elements</a></li>
                                <li><a href="#">Coloured Headers</a></li>                            
                                <li><a href="#">Primary Buttons & Default</a></li>							
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Much more</li>
                                <li><a href="#">Easy to Customize</a></li>
                                <li><a href="#">Calls to action</a></li>
                                <li><a href="#">Custom Fonts</a></li>
                                <li><a href="#">Slide down on Hover</a></li>                         
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Women Collection</li>                            
                                <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                        <h4><small>Summer dress floral prints</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                        <h4><small>Denin jacket stamped</small></h4>                                        
                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                    </div><!-- End Item -->                                
                                  </div><!-- End Carousel Inner -->
                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div><!-- /.carousel -->
                                <li class="divider"></li>
                                <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>				
                </li>
                <li><a href="#">Store locator</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->email}} <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <!--li><a href="#">Mon profil</a></li>
                    <li><a href="/auth/logout">Déconnexion</a></li-->
                      <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                    <p class="text-left"><strong>{{Auth::user()->email}}</strong></p>
                                                    <p class="text-left small">Vous êtes connecté</p>
                                                    <p class="text-left">
                                                        <a href="{{ url('/user/profil') }}" class="btn btn-primary btn-block btn-sm">Mon profil</a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <p>
                                                        <a href="{{ url('/auth/logout') }}" class="btn btn-danger btn-block">Me déconnecter</a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                  </ul>
                </li>
                <li><a href="#">Mon panier (0) produits</a></li>
            @else
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Connexion</a>
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Connexion</h1><br>
                                  <form method="POST" action="/auth/login">
                                      {!! csrf_field() !!}
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="password" name="password" placeholder="Mot de Passe">
                                    <input type="submit" name="login" class="login loginmodal-submit" value="Se connecter">
                                  </form>
                            </div>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#register-modal">S'inscrire</a>
                    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h1>Inscription</h1><br>
                                  <form method="POST" action="{{ url('/auth/register') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom">
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                    <input type="password" name="password" placeholder="Mot de Passe">
                                    <input type="password" name="password_confirmation" placeholder="Répéter le Mot de Passe">
                                    <input type="submit" name="register" class="login loginmodal-submit" value="S'inscrire">
                                  </form>
                            </div>
                    </div>
                </li>
            @endif
          </ul>
        </div><!-- /.nav-collapse -->
      </nav>
        @section('content')
        @show
    </div>
        
    </body>
</html>
