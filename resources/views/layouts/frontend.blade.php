<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title> Tamila - @yield('title')</title> 
      <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com " />
      <meta name="description" content="Agencia Tamila" />
      <meta name="keywords" content="Tamila, diseño web, programación, software" />
      <meta name="copyright" content="Web Master César Cancino Zapata | yo@cesarcancino.com " />
      <meta name="designer" content="Web Master César Cancino Zapata | yo@cesarcancino.com " />
      <meta name="publisher" content="Web Master César Cancino Zapata | yo@cesarcancino.com " /> 
      
      <link href="{{asset('img/isotipo2.png')}}" rel="icon" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet" />
      <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" />
      <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      @stack('css')
   </head>
   <body>
     <!--toolbar-->
     <div class="toolbar">
      <div class="container ">
          <div class="col-md-8">
              <div class="toolbar-coordenadas">
                  <i class="fas fa-envelope"></i> E-Mail: info@tamila.cl | <i class="fas fa-phone"></i> Teléfonos: <a href="tel:+56953240842">+56953240842</a>
              </div>
          </div>
          <div class="col-md-4">
              <ul class="toolbar-social">
                  <li class="facebook"><a href="https://www.facebook.com/tamilaoficial" target="_blank" title="Síguenos en Facebook"><span class="fab fa-facebook"></span></a></li>
                  <li class="twitter">
                      <a href="https://twitter.com/tamila_oficial" target="_blank" title="Síguenos en Twitter"><span class="fab fa-twitter"></span></a>
                  </li>
                  <li class="linkedin">
                      <a href="https://www.linkedin.com/in/tamila-agencia-a6b792143/" target="_blank" title="Síguenos en Linkedin"><span class="fab fa-linkedin"></span></a>
                  </li>
                  <li class="youtube">
                      <a href="https://www.youtube.com/channel/UCXNoBL-4knlQosqEkwVlZ-g" target="_blank" title="Suscríbete a nuestro canal de Youtube"><span class="fab fa-youtube"></span></a>
                  </li>
                  <li class="whatsapp">
                      <a href="https://web.whatsapp.com/send?phone=+56953240842&text=https://www.tamila.cl/%20Hola%20necesito%20informaci%C3%B3n%20de:" target="_blank" title="Conversemos a través de Whatsapp"><span class="fab fa-whatsapp"></span></a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!--/toolbar-->
  <!-- Header -->
  <header id="home">


      <!-- Nav -->
      <nav id="nav" class="navbar nav-transparent">

          <div class="container">

              <div class="navbar-header">
                  <!-- Logo -->
                  <div class="navbar-brand">
                      <a href="{{route('home_index')}}" title="Agencia Tamila">
                          <img class="logo" src="{{asset('img/logo_3.png')}}" alt="logo" />
                          <img class="logo-alt" src="{{asset('img/logo_2.png')}}" alt="logo" />
                      </a>
                  </div>
                  <!-- /Logo -->

                  <!-- Collapse nav button -->
                  <div class="nav-collapse">
                      <span></span>
                  </div>
                  <!-- /Collapse nav button -->
              </div>

              <!--  Main navigation  -->
              <ul class="main-nav nav navbar-nav navbar-right">
                  <li><a href="{{route('home_index')}}" title="Inicio">Inicio</a></li>
                  <li ><a href="{{route('rutas_sobre_nosotros')}}" title="Nosotros">Nosotros</a></li>
                  <li><a href="{{route('rutas_servicios')}}" title="Servicios">Servicios</a></li>
                  <li ><a href="https://www.cesarcancino.com/cursos-en-udemy" target="_blank" title="Capacitación">Capacitación</a></li>
                  <li><a href="{{route('home_index')}}" title="Contacto">Contacto</a></li>
              </ul>
              <!-- /Main navigation -->

          </div>
      </nav>
      <!-- /Nav -->



  </header>
  <!-- /Header -->

  <!--contenido-->
  @yield('content')
  <!--/contenido-->


  <!-- Footer -->
  <footer class="footer">

      <!-- Container -->
      <div class="container">
          <p>Teléfono: +56953240842 | E-Mail : info@tamila.cl </p>
          <p>&copy; Todos los derechos reservados 2019 - {{date('Y')}} | Desarrollado por <a href="http://www.tamila.cl" title="Tamila.cl" target="_blank">Tamila.cl</a></p>
          <p class="footer-redes">
              <ul class="list-inline">
                  <li><a href="https://web.facebook.com/tamilaagencia/" title="Síguenos en Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/tamila_oficial" target="_blank" title="Siguenos en Twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/tamila-agencia-a6b792143/" target="_blank" title="Síguenos en Linkedin"><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCXNoBL-4knlQosqEkwVlZ-g" target="_blank" title="Suscríbete a nuestro canal de Youtube"><i class="fab fa-youtube"></i></a></li>
                  <li>
                      <a href="https://api.whatsapp.com/send?phone=+56953240842&text=https://www.tamila.cl/%20Hola%20necesito%20informaci%C3%B3n%20de:" target="_blank" title="Conversemos a través de Whatsapp"><span class="fab fa-whatsapp"></span></a>
                  </li>
              </ul>
          </p>
      </div>
      <!-- /Container -->

  </footer>
  <!-- /Footer -->
 
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/funciones.js')}}"></script>
    
    
      <!--/scripts propios-->
      @stack('scripts')
      <!--/Dependencias-->
      <!--call now-->
    
    <a class="whats-app " href="https://web.whatsapp.com/send?phone=+56953240842&text=https://www.tamila.cl/ %0D%0A%0D%0AHola necesito información de: " target="_blank " title="Estamos disponibles. Cuéntanos en qué te podemos ayudar!!! ">
      <i class="fab fa-whatsapp"></i>
  </a>
  <!--/call now-->
   </body>
</html>