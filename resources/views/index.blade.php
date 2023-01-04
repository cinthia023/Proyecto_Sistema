@extends("layouts.app")
@section('title', 'Cucharon')
@section('content')
@csrf

<div class="container text"
<p>Cucharones</p>
<a href ="cucharon/create" class="btn5 btn-primary" style="height: 100%;">Ingresar registro</a>



    <div class="row">
@foreach ($cucharons as $cucharons)
<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
class="card-img-top rounded-circle mx-auto d-block"
src="images/{{$cucharons->entrada_cucharon}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$cucharons->numero}}</h5>
    <p class="card-text">{{$cucharons->compania}}</p>
    <p class="card-text">{{$cucharons->caracteristicas}}</p>
    <p class="card-text">{{$cucharons->fecha_ingreso}}</p>
    <p class="card-text">{{$cucharons->fecha_entrada}}</p>
    <p class="card-text">{{$cucharons->procedimiento}}</p>
    <p class="card-text">{{$cucharons->entrada_cucharon}}</p>


    <a href="/delete/{{$cucharons->id}}" class="btn btn-primary">Delete</a>
    <a href="/cucharon/{{$cucharons->id}}" class="btn btn-secondary">Mostrar</a>

  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection





