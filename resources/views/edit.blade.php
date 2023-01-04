@extends('layouts.app')
@section('title','Cucharon Edit')
@section('content')
    <form class="form-group" method="POST" action="{{action('CucharonController@update', $cucharons->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
        <label for="">numero:</label>
        <input type="text" name="numero" value="{{$cucharons->numero}}"class="form-control">
        <label for="">compania:</label>
        <input type="text" name="compania" value="{{$cucharons->compania}}"class="form-control">
        <label for="">caracteristicas</label>
        <input type="text" name="caracteristicas" value="{{$cucharons->caracteristicas}}"class="form-control">
        <label for="">fecha_ingreso</label>
        <input type="text" name="fecha_ingreso" value="{{$cucharons->fecha_ingreso}}"class="form-control">
        <label for="">fecha_entrega</label>
        <input type="text" name="fecha_entrega" value="{{$cucharons->fecha_entrega}}"class="form-control">
        <label for="">procedimiento</label>
        <input type="text" name="procedimiento" value="{{$cucharons->procedimiento}}"class="form-control">

        <label for="">entrada_cucharon</label>
        <input type="file" name="entrada_cucharon" value="{{$cucharons->entrada_cucharon}}"class="form-control">



</div>



<button type="submit"class="btn btn-primary">Editar</button>
</form>
@endsection
