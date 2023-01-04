@extends('layouts.app')
@section('title', 'Mantenimiento Create')
@section('content')
<form class="form-group" method="POST" action="/mantenimiento" enctype="multipart/form-data">
    @csrf
         <div clas='form-group'>
             <label for=''>num_cucharon</label>
             <input type='text'name="num_cucharon"class='form-control'>
             <label for=''>material</label>
             <input type='text'name="material"class='form-control'>
             <label for=''>tiempo</label>
             <input type='text'name="tiempo"class='form-control'>
             <label for=''>estado</label>
             <input type='text'name="estado"class='form-control'>
             <label for=''>salida_cucharon</label>
             <input type='file'name="salida_cucharon"class='form-control'>
             <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
</form>
@endsection
