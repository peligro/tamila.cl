@extends('../layouts.frontend')
@section('title','Home')
@section('content')
<div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Agencia Tamila.cl</h2>
            </div>
            <!-- /Section header -->
            <p style="text-align: justify; margin: 0px 100px 0px 100px;">
                Tamila Digital nace del sueño de su fundador, César Cancino, quien siempre ha sentido una tremenda pasión por el mundo digital y todo su ecosistema.
            </p>
            <p style="text-align: justify; margin: 0px 100px 0px 100px;">
                En Tamila trabajamos bajo 4 principios generales:
            </p>
            <hr />
            <!-- about -->
            <div class="col-md-3">
                <div class="about">
                    <i class="fas fa-user-check"></i>
                    <h3>Responsabilidad</h3>
                    <p>Más del 50% de los proyectos que hemos realizado, son de clientes a quienes no les han cumplido.</p>
                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-3">
                <div class="about">
                    <i class="fas fa-people-carry"></i>
                    <h3>Ética y respeto</h3>
                    <p>La idea es del cliente, por lo que nosotros sólo lo guiaremos y apoyaremos en su implementación técnica.</p>
                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-3">
                <div class="about">
                    <i class="fas fa-users"></i>
                    <h3>Clientes</h3>
                    <p>La mejor publicidad es la buena opinión que tienen nuestros clientes sobre nosotros.</p>
                </div>
            </div>
            <!-- /about -->
            <!-- about -->
            <div class="col-md-3">
                <div class="about">
                    <i class="fa fa-mobile"></i>
                    <h3>Productos propios</h3>
                    <p>Creamos productos para ayudar al mercado a trabajar de manera más eficiente todos sus procesos.</p>
                </div>
            </div>
            <!-- /about -->
        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /About -->
<!-- Why Choose Us -->
<div id="features" class="section md-padding bg-grey">

<!-- Team -->
<div id="team" class="section ">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Nuestro equipo</h2>
            </div>
            <!-- /Section header -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('img/foto_2.jpg')}}" alt="César Cancino Zapata" />
                        <div class="overlay">
                            <div class="team-social">
                                <a href="https://www.cesarcancino.com" target="_blank"><i class="fas fa-link"></i></a>
                                <a href="https://www.linkedin.com/in/c%C3%A9sar-hans-cancino-zapata-33487118/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://twitter.com/cesar_cz" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/user/peligrocesar" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>César Cancino Zapata</h3>
                        <span>CEO Fundador</span>
                    </div>
                </div>
            </div>
            <!-- /team -->
           


        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Team -->

</div>
<!-- /Why Choose Us -->
@endsection
 