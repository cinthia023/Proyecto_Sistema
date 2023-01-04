
@include('layouts.app')
@section('title','Cucharon')
@section('content')

@csrf
    <p>Listado de cuchaeones</p>
    <div class="row">
    @foreach ($cucharons as $cucharons)
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top rounded-circle mx-auto d-blok"
  src="" alt="">
  <img style="height: 100px; width: 100px;
  background-color: #EFEFEF; margin: 20px;
  "class="card-img-top rounded-circle mx-auto d-block"
  src="images/{{$cucharons->entrada_cucharon}}"alt="">
  <div class="card-body">
    <h5 class="card-title">{{$cucharons->numero}}</h5>
    <h5 class="card-title">{{$cucharons->compania}}</h5>
    <h5 class="card-title">{{$cucharons->caracteristicas}}</h5>
    <h5 class="card-title">{{$cucharons->fecha_ingreso}}</h5>

    <h5 class="card-title">{{$cucharons->fecha_entrega}}</h5>

    <h5 class="card-title">{{$cucharons->procedimiento}}</h5>


</form>
  </div>
</div>
</div>
@endforeach
</div>
