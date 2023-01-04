@extends("layouts.app")
@section('title', 'Reparacion')
@section('content')
@csrf
    <p>Cucharones en reparacion</p>
    <div class="row">
@foreach ($reparacions as $reparacions)
<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
class="card-img-top rounded-circle mx-auto d-block"
src="images/{{$reparacions->salida_cucharon}}" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$reparacions->num_cucharon}}</h5>
    <p class="card-text">{{$reparacions->material}}</p>
    <p class="card-text">{{$reparacions->tiempo}}</p>
    <p class="card-text">{{$reparacions->estado}}</p>




    <a href="/reparacion/{{$reparacions->id}}" class="btn btn-secondary">Mostrar</a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection
