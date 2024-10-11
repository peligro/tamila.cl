@extends('../layouts.frontend')
@section('title','Home')
@section('content')
<div id="about" class="section">
  <div class="container-fluid">
      <div class="row">
          <div id="slider" class="nivoSlider">
              <!--ítem-->
              <a title="Capacitación"  href="">
                  <img src="{{asset('img/slide_10.jpg')}}" alt="Capacitación" />
              </a>
              <!--/ítem-->
              <!--ítem-->
          
              <a title="Agenda Horas"  href=" ">
                  <img src="{{asset('img/woman.jpg')}}" alt="Agenda Horas" />
              </a>
              
              <!--/ítem-->
              <!--ítem-->
              
              <a title="Tienda Virtual">
                  <img src="{{asset('img/slide_5.jpg')}}" alt="Tienda Virtual" />
              </a>
              
              <!--/ítem-->

              
          </div>
      </div>
  </div>
</div>
<!--/slide-->

<!-- About -->
<div id="about" class="section md-padding">

  <!-- Container -->
  <div class="container">

      <!-- Row -->
      <div class="row">

          <!-- Section header -->
          <div class="section-header text-center">
              <h2 class="title">Agencia Tamila Digital</h2>
          </div>
          <!-- /Section header -->

          <!-- about -->
          <div class="col-md-4">
              <div class="about">
                  <a title="Productos propios">
                      <i class="fas fa-globe"></i>
                      <h3>Productos propios</h3>
                      <p>Nos apasiona generar productos útiles para la sociedad.</p>
                  </a>
              </div>
          </div>
          <!-- /about -->

          <!-- about -->
          <div class="col-md-4">
              <div class="about">
                  <a title="Cursos y Talleres">
                      <i class="fa fa-graduation-cap"></i>
                      <h3>Cursos y Talleres</h3>
                      <p>Te enseñamos en base a la experiencia que hemos adquirido con los años.</p>
                  </a>
              </div>
          </div>
          <!-- /about -->

          <!-- about -->
          <div class="col-md-4">
              <div class="about">
                  <a title="Aplicaciones a medida">
                      <i class="fa fa-mobile"></i>
                      <h3>Aplicaciones a medida</h3>
                      <p>Cuéntanos tu necesitad, y nosotros la convertiremos en un requerimiento real.</p>
                  </a>
              </div>
          </div>
          <!-- /about -->

      </div>
      <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /About -->
<!-- Testimonial -->
<div id="testimonial" class="section md-padding">

  <!-- Background Image -->
  <div class="bg-img">
      <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Container -->
  <div class="container">

      <!-- Row -->
      <div class="row">

          <!-- Testimonial slider -->
          <div class="col-md-10 col-md-offset-1">
              <div id="testimonial-slider" class="owl-carousel owl-theme">

                  <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/maraton.jpeg')}}" alt="">
                          <h3 class="white-text">César Cancino Zapata</h3>
                          <span>CEO Fundador Tamila</span>
                      </div>
                      <p class="white-text">Convierte tus sueños en metas concretas, con plazos y formas. No sigas viviendo por mientras, comienza a vivir y aprovechar tu presente para que éste se convierta en el futuro que deseas.</p>
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/yoda.jpg')}}" alt="">
                          <h3 class="white-text">Yoda</h3>
                          <span>Maestro Jedi</span>
                      </div>
                      <p class="white-text">Hacer o no hacer. No sirve intentar, solo hacer.</p>
                  </div>
                  <!-- /testimonial -->
                 <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/einstain.jpeg')}}" alt="">
                          <h3 class="white-text">Albert Einstein</h3>
                          <span>Físico</span>
                      </div>
                      <p class="white-text">Una persona que nunca cometió un error, nunca intentó algo nuevo.</p>
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/peter_drucker.jpeg')}}" alt="">
                          <h3 class="white-text">Peter Drucker</h3>
                          <span>Físico</span>
                      </div>
                      <p class="white-text">Donde veas un negocio exitoso, alguien tomó alguna vez una decisión valiente.</p>
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/bertoltbrecht.jpg')}}" alt="">
                          <h3 class="white-text">Bertolt Brecht</h3>
                          <span>Dramaturgo</span>
                      </div>
                      <p class="white-text">Hay hombres que luchan un día y son buenos, hay otros que luchan un año y son mejores, hay quienes luchan muchos años y son muy buenos, pero los hay que luchan toda la vida,  esos son los imprescindibles.</p>
                  </div>
                  <!-- /testimonial -->
                  <!-- testimonial -->
                  <div class="testimonial">
                      <div class="testimonial-meta">
                          <img src="{{asset('img/cofucio.jpeg')}}" alt="">
                          <h3 class="white-text">Confucio</h3>
                          <span>Filósofo</span>
                      </div>
                      <p class="white-text">Elige un trabajo que te guste y no tendrás que trabajar ni un día de tu vida.</p>
                  </div>
                  <!-- /testimonial -->

              </div>
          </div>
          <!-- /Testimonial slider -->

      </div>
      <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Testimonial -->
<!-- Why Choose Us -->
<div id="features" class="section md-padding bg-grey">

  <!-- Container -->
  <div class="container">

      <!-- Row -->
      <div class="row">

          <!-- why choose us content -->
          <div class="col-md-6">
              <div class="section-header">
                  <h2 class="title">Agencia Tamila Digital</h2>
              </div>
              <p>Tamila Digital nace del sueño de su fundador, César Cancino, quien siempre ha sentido una tremenda pasión por el mundo digital y todo su ecosistema.</p>
              <p>En Tamila trabajamos bajo 4 principios generales:</p>
              <div class="feature">
                  <i class="fa fa-check"></i>
                  <p>Responsabilidad con cada proyecto.</p>
              </div>
              <div class="feature">
                  <i class="fa fa-check"></i>
                  <p>La idea es del cliente, por lo que nosotros sólo lo guiaremos y apoyaremos en su implementación técnica.</p>
              </div>
              <div class="feature">
                  <i class="fa fa-check"></i>
                  <p>La mejor publicidad es la buena opinión que tienen nuestros clientes sobre nosotros.</p>
              </div>
              <div class="feature">
                  <i class="fa fa-check"></i>
                  <p>Nuestra principal premiza es crear contenido y productos propios.</p>
              </div>
          </div>
          <!-- /why choose us content -->

          <!-- About slider -->
          <div class="col-md-6">
              <div id="about-slider" class="owl-carousel owl-theme">
                  <img class="img-responsive" src="{{asset('img/about1.jpg')}}" alt="">
                  <img class="img-responsive" src="{{asset('img/about2.jpg')}}" alt="">
              </div>
          </div>
          <!-- /About slider -->

      </div>
      <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
@endsection
@push('css')
<link type="text/css" rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" />
@endpush
@push('scripts')
<script type="text/javascript" src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            pauseTime: 10000,
        });

    });
</script>
@endpush