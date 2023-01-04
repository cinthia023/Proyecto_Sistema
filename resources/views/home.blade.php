@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDO AL SISTEMA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <div></div>
                    <div>
                    <a href ="/cucharon" class="btn1 btn-primary" style="height: 100%;">Cucharones</a>
                    </div>
                    <h>

                    </h>

                    <div>
                    <a href ="/reparacion" class="btn2 btn-primary" style="height: 100%;">Reparacion</a>
                    </div>



                    <div>
                    <a href ="/mantenimiento" class="btn3 btn-primary" style="height: 100%;">Mantenimiento</a>

                    </dev>
                    <div>
                        <a href ="/search" class="btn3 btn-primary" style="height: 100%;">Buscar</a>

                    </dev>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
