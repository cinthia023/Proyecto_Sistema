@extends('layouts.app')
@section('title', 'Cucharon Create')
@section('content')

{!!Form::open(['route'=>'cucharon.store','method'=>'POST','files'=>'true']) !!}
@include('form')
{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}
@endsection
