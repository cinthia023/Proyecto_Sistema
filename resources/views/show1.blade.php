@extends("layouts.app")
@section('title', 'reparacions')
@section('content')
@csrf
<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
class="card-img-top rounded-circle mx-auto d-block"
src="/images/{{$reparacions->salida_cucharon}}" alt="">
<h5 class="text-center">{{$reparacions->name}}</h5>
<div class="text-center">
    <a href="/delete/{{$reparacions->id}}" class="btn btn-primary">Delete</a>
    <a href="/reparacion/{{$reparacions->id}}/edit" class="btn btn-secondary">Editar</a>
  </div>
@endsection
