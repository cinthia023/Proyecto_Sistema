@extends('layouts.app')
@section('title','Reparacion Edit')
@section('content')
    <form class="form-group" method="POST" action="{{action('ReparacionController@update', $reparacions->id)}}"
     enctype="multipart/form-data">
     @method('PUT')
    @csrf
     <div clas="form-group">
        <label for="">num_cucharon:</label>
        <input type="text" name="num_cucharon" value="{{$reparacions->num_cucharon}}"class="form-control">
        <label for="">material:</label>
        <input type="text" name="material" value="{{$reparacions->material}}"class="form-control">
        <label for="">tiempo</label>
        <input type="text" name="tiempo" value="{{$reparacions->tiempo}}"class="form-control">
        <label for="">estado</label>
        <input type="text" name="estado" value="{{$reparacions->estado}}"class="form-control">
        <label for="">salida_cucharon</label>
        <input type="text" name="salida_cucharon" value="{{$reparacions->salida_cucharon}}"class="form-control">
</div>

<button type="submit"class="btn btn-primary">Editar</button>
</form>
@end
