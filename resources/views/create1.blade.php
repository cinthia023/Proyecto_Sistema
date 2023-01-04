@extends('layouts.app')
@section('title', 'Reparacion Create')
@section('content')

{!!Form::open(['route'=>'reparacion.store','method'=>'POST','files'=>'true']) !!}
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
