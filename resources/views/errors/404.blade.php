@extends('../layouts.frontend')
@section('title','404 Recurso no encontrado')
@section('content')
<div id="about" class="section md-padding">

  <!-- Container -->
  <div class="container">

      <!-- Row -->
      <div class="row">

          <!-- Section header -->
          <div class="section-header text-center">
              <h2 class="title">Error 404</h2>
          </div>
          <!-- /Section header -->
          <p style="text-align: justify; margin: 0px 100px 0px 100px;">
              Recurso no encontrado
          </p>
         

          

          
      </div>
      <!-- /Row -->
      <div class="row">
          <div class="col-lg-9 text-center">
              <img src="{{asset('img/404.png')}}" alt="Recurso no encontrado" title="Recurso no encontrado" />
          </div>
      </div>
  </div>
  <!-- /Container -->

</div>
<!-- /About -->
@endsection
