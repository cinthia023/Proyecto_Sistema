@extends("layouts.app")
@section('title', 'Mantenimiento')
@section('content')
@csrf
    <p>Cucharones en mantenimiento</p>
    <div class="row">
@foreach ($mantenimientos as $mantenimientos)
<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
class="card-img-top rounded-circle mx-auto d-block"
src="images/{{$mantenimientos->salida_cucharon}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$mantenimientos->num_cucharon}}</h5>
    <p class="card-text">{{$mantenimientos->material}}</p>
    <p class="card-text">{{$mantenimientos->tiempo}}</p>
    <p class="card-text">{{$mantenimientos->estado}}</p>




    <a href="/mantenimiento/{{$mantenimientos->id}}" class="btn btn-secondary">Mostrar</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection





