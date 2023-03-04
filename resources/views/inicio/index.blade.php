@extends('master')

@section('css')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection

@section('content')
<main>

    <section class="py-5 content-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <img class="img2" src="img/banner.jpg" alt="">
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container1">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col1">
            <div class="card1 shadow-sm">
              
              <button> <a href="http://"> <img class="img_pro" src="img/instalacion.jpg" alt=""> </a></button>
              
              <div class="card-body">
                <p class="card-text">INSTALACIÓN</p>
              </div>
            </div>
          </div>
          <div class="col3">
            <div class="card1 shadow-sm">
              <button> <a href="http://"> <img class="img_pro" src="img/entrega_a_pisos_posteriores.jpg" alt=""> </a></button>
              <div class="card-body">
                <p class="card-text">ENTREGA A PISOS POSTERIORES</p>
              </div>
            </div>
          </div>
          <div class="col3">
            <div class="card1 shadow-sm">
              <button> <a href="http://"> <img class="img_pro" src="img/desempaque.jpg" alt=""> </a></button>
              <div class="card-body">
                <p class="card-text">DESEMPAQUE</p>
              </div>
            </div>
          </div>
          <div class="col1">
            <div class="card1 shadow-sm">
              <button> <a href="http://"> <img class="img_pro" src="img/entrega_personalizada.jpg" alt=""> </a></button>
              <div class="card-body">
                <p class="card-text">ENTREGA PERSONALIZADA</p>
              </div>
            </div>
          </div>
          <div class="col2">
            <div class="card1 shadow-sm">
              <button> <a href="http://"> <img class="img_pro" src="img/garantias_extendidas.jpg" alt=""> </a></button>
              <div class="card-body">
                <p class="card-text">GARANTÍAS EXTENDIDAS</p>
              </div>
            </div>
          </div>
          <div class="col5">
            <div class="card1 shadow-sm">
              <button> <a href="http://"> <img class="img_pro" src="img/mantenimiento_preventivo.jpg" alt=""> </a></button>
              <div class="card-body">
                <p class="card-text">MANTENIMIENTO PREVENTIVO</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </main>
    
@endsection