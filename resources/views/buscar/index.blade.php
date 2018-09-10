<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memorials - Funeral &amp; Cemeteries HTML5 Template by Jewel Theme </title>

    <meta name="description" content="Memorials - Funeral &amp; Cemeteries HTML5 Template" >

    <meta name="author" content="Jewel Theme">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Bootstrap v3.3.4 -->
    <link href="/cementerio/css/bootstrap.min.css" rel="stylesheet">

    <!-- icon fonts Font Awesome 4.3.0 -->
    <link href="/cementerio/css/font-awesome.min.css" rel="stylesheet"> 

    <!-- Plugins  -->
    <link href="/cementerio/css/jquery.fs.boxer.css" rel="stylesheet" /> 
    
    <link rel="stylesheet" href="/cementerio/css/owl.carousel.css">  
    
    <link rel="stylesheet" href="/cementerio/rs-plugin/css/settings.css" media="screen" /> <!-- SLIDER REVOLUTION -->
    
    <!-- Import Custom Styles -->
    <link href="/cementerio/css/style.css" rel="stylesheet"> 

    <!-- Import Responsive Styles -->
    <link href="/cementerio/css/responsive.css" rel="stylesheet">

  
        <script src="/cementerio/js/html5shiv.js"></script>

        
    </head>
    <body>

      


            <!-- header-middle -->
            <div id="header-middle" class="header-middle">
                <div class="container"> 
                    <div class="logo pull-left">
                        <a class="navbar-brand" href="./">
                            <img src="/cementerio/images/logo2.png" alt="Memorial Logo">
                        </a><!-- /.navbar-brand -->
                    </div><!-- /.logo -->

            <!--        <div class="middle-quote pull-left">    
                        <blockquote class="quote">  
                            A ceremony of a dead person held with the burial or cremation in connection.
                        </blockquote>
                    </div><!-- /.middle-quote -->

                    <div class="middle-right pull-right">
                        <div class="street media">
                            <div class="media-left"><i class="fa fa-map-marker"></i> </div>
                            <div class="media-body">
                                <span> Linares</span> Salida Huapi S/N
                            </div>  
                        </div>  

                        <div class="cell media">
                            <div class="media-left"><i class="fa fa-phone"></i> </div>
                            <div class="media-body">
                                Llamar a<span>73 2 211177</span>
                            </div>  
                        </div>
                    </div><!-- /.middle-right -->
                </div><!-- /.container -->
            </div><!-- /.header-middle -->
            <!-- Header-middle End  -->



            <!-- Main Menu -->
            <div class="main-menu-container navbar-fixed-top-">
                <div id="main-menu" class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="./">
                                <img src="/cementerio/images/logo2.png" alt="Memorial Logo">
                            </a><!-- /.navbar-brand -->
                            <!-- responsive navigation -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-list"></i>
                            </button> <!-- /.navbar-toggle --> 
                        </div> <!-- /.navbar-header -->

                        <nav class="collapse navbar-collapse">
                            <!-- Main navigation -->
                            <ul id="mainNavigation" class="main-mav nav navbar-nav">
                                <li class="menu-item-has-children current-menu-item"><a href="index.html">Inicio</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home V1</a></li>
                                        <li><a href="index2.html">Home V2</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li><!-- /.menu-item-has-children --> 
                              <li><a href="about.html">Nosotros</a></li> 
                                <li><a href="about.html">Ubicación</a></li>
                                <li><a href="funeral.html">Funerales</a></li>  
                                <li><a href="cemetery.html">Cementerio</a></li>
                                <li><a href="obituaries.html">Obituarios</a></li> 
                            <li><a href="/login">Ingresar</a></li> 
                            </ul> <!-- /#mainNavigation -->
                        </nav> <!-- /.navbar-collapse  -->
                    </div> <!-- /.container -->
                </div><!-- /#main-menu -->
            </div><!-- /.main-menu-container -->
            <!-- Main Menu End --> 

        </header><!-- /header -->


        <section id="top-banner" class="top-banner background-image" data-bg-image="/cementerio/images/top-banner/cementerio.jpg">  
            <div class="overlay">
                <div class="container">
                    <div class="top-banner-item">
                        <h2 class="top-banner-title-1">
                            Parque
                        </h2>
                        <h3 class="top-banner-title-2">
                           Las Rosas
                        </h3>
                     
                    </div><!-- /.top-banner-item -->
                </div>
            </div><!-- /.overlay -->
        </section><!-- /#top-banner -->



    


        <!-- help Section -->
        <section id="help" class="help">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="section-details">
                    
                            
                      <div class="container">
<table class="table table-striped">
  <thead class="thead-active">

       <h1>
        <small>Buscar Estudiante</small>
      </h1>


{!! Form::open([ 'route' => 'estudiantes.index','method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}


{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Codigo de Barra del Estudiante, Apellidos o Rut']) !!}




{!! Form::close() !!}
</div>
    <tr>
      <th scope="col">Acción</th>
      <th scope="col">Nombre Del Estudiante</th>
      <th scope="col">Curso</th>
     
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($estudiantes as $estudiante)
    <tr>
      <td><a href="{{ route('estudiantes.show', $estudiante->id)}}" class="btn btn-primary">Ver</a> </td>
     <td>{{($estudiante->nombres)}} {{($estudiante->apellidos)}}</td>
     <td>  {{ $estudiante->cursos->created_at}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $estudiantes->render() !!}

</div>



                        </div><!-- /.section-detials -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->
        </section><!-- /#help -->
        <!-- help Section -->


        <!-- Testiminial Section -->

      



        <!-- Footer Widget -->
        <footer id="footer-widget" class="footer-widget">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="widget widget_text">
                                <a class="widget-logo" href="#"><img src="/cementerio/images/logo.png" alt="Logo"></a>  
                                <p>
                                    A legacy is a gift that some one makes to another; usually something that one leaves behind to enjoy 
                                </p>
                                <div class="social-icon">
                                    <a href="#" class="facebook"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i></a>
                                    <a href="#" class="flickr"><i class="fa fa-flickr"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest-square"></i></a>
                                    <a href="#" class="envelope"><i class="fa fa-envelope-square"></i></a>
                                </div>
                            </aside><!-- /.widget -->
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <aside class="widget widget_links">
                                <h4 class="widget-title"> 
                                    Locations
                                </h4>
                                <div class="address">
                                    <span class="address-title"><i class="fa fa-map-marker"></i>Melbourne</span>
                                    <span class="address-details">121 King Street, Melbourne VIC 3000, Australia</span>
                                </div>
                                <div class="address">
                                    <span class="address-title"><i class="fa fa-map-marker"></i>Melbourne</span>
                                    <span class="address-details">121 King Street, Melbourne VIC 3000, Australia</span>
                                </div>
                            </aside><!-- /.widget -->
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3">
                            <aside class="widget widget_twitter_feeds">
                                <div class="stripe-full">
                                    <h4 class="widget-title">
                                        Twitter Feeds
                                    </h4>
                                </div>
                                <ul class="twitter-feeds">
                                    <li>
                                        <div class="tweet">
                                            <a href="#">@themeforest</a> You rejoice because you and your family are in good health
                                            <a href="#">http://enva.to/GC58F</a>
                                            <span class="tweet-time">
                                                <i class="fa fa-twitter"></i> 3 hours ago
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tweet">
                                            <a href="#">@themeforest</a> because circumstances surrounding you are favorable
                                            <a href="#">http://enva.to/GC58F</a>
                                            <span class="tweet-time">
                                                <i class="fa fa-twitter"></i> 3 hours ago
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </aside><!-- /.widget -->
                        </div><!-- /.col-md-3 --> 

                        <div class="col-md-3">
                            <aside class="widget widget_newslatter">
                                <div class="stripe-full">
                                    <h4 class="widget-title">
                                        Newsletter
                                    </h4>
                                </div>
                                <p>
                                    Subscribe to our latest news and updates Be 100% sure that we will not spam you! 
                                </p>
                                <form id="subscribe-form" class="subscirbe-form" method="post">
                                    <p class="alert-success"></p>
                                    <p class="alert-warning"></p>

                                    <div class="subscribe-hide">
                                        <input name="subscibe_email" type="email" id="subscibe_email" placeholder="Email address" required>
                                        <button class="subscibe-btn" type="submit" value="Send"><i class="fa fa-envelope"></i></button>
                                        <div class="subscribe-error"></div>
                                    </div><!-- /.subscribe-hide -->
                                    <div class="subscribe-message"></div>
                                </form>
                            </aside><!-- /.widget -->
                        </div><!-- /.col-md-3 --> 
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->

            <div class="copy-right text-center">
                <div class="container">
                    © <a href="http://memorialswp.jeweltheme.com/">Memorials</a> 2015 - All Rights Reserves <span></span> Designed by <a href="http://themeforest.net/user/bigpsfan">bigpsfan</a> <span></span> Developed by <a href="http://jeweltheme.com">Jewel Theme</a>        
                </div>          
            </div><!-- /.copyright -->
        </footer><!-- /#footer-widget -->
        <!-- Footer Widget End -->



        
        <!-- Include modernizr-2.8.0.min.js -->
        <script src="cementerio/js/modernizr.js"></script>

        <!-- Include jquery.min.js plugin -->
        <script src="cementerio/js/jquery-2.1.0.min.js"></script>
        <script src="cementerio/js/plugins.js"></script> 
        <!--script src="cementerio/js/custom.js"></script>

        <!-- Slider Revolution  -->
        <script type="text/javascript" src="cementerio/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="cementerio/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                jQuery('.video-js').each(function(){
                    jQuery(this).attr("width","100%", "height","100%");
                });

                revapi = jQuery('.main-slider').revolution(
                {
                    delay:5000,
                    startwidth:1170,
                    startheight:615,
                    hideThumbs:10,
                    fullWidth:"on",
                    fullScreen:"off",
                    fullScreenOffsetContainer: ""
                });

        }); //ready
        </script>

<style type="text/css">
  body{
       background:url("/cementerio/images/top-banner/cementerio.jpg");
        background-repeat: no-repeat;
    background-size: contain, cover;       }
</style>

    </body>
    </html>