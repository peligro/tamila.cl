@extends('../layouts.errors')
@section('title','404 Recurso no encontrado')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Error 404
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('index_index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Error 404</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Recurso no encontrado</h3>

          <p>
           Esta sección no está disponible por ahora
          </p>
          <p><a href="{{route('index_index')}}" title="Volver a la página de inicio">&larr; Volver a la página de inicio</a></p>

         
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
@endsection
