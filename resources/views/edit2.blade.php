@extends('layouts.app')
@section('title','Mantenimiento Edit')
@section('content')
    <form class="form-group" method="POST" action="{{action('MantenimientoController@update', $mantenimientos->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
        <label for="">num_cucharon:</label>
        <input type="text" name="num_cucharon" value="{{$mantenimientos->num_cucharon}}"class="form-control">
        <label for="">material:</label>
        <input type="text" name="material" value="{{$mantenimientos->material}}"class="form-control">
        <label for="">tiempo</label>
        <input type="text" name="tiempo" value="{{$mantenimientos->tiempo}}"class="form-control">
        <label for="">estado</label>
        <input type="text" name="estado" value="{{$mantenimientos->estado}}"class="form-control">
        <label for="">salida_cucharon</label>
        <input type="text" name="salida_cucharon" value="{{$mantenimientos->salida_cucharon}}"class="form-control">
</div>

<button type="submit"class="btn btn-primary">Editar</button>
</form>
@end
