<div class="form-group">
        {{Form::label('numero','numero')}}
        {{Form::text('numero',null,['class'=>'form-control'])}}
        {{Form::label('compania','compania')}}
        {{Form::text('compania',null,['class'=>'form-control'])}}
        {{Form::label('caracteristicas','caracteristicas')}}
        {{Form::text('caracteristicas',null,['class'=>'form-control'])}}
        {{Form::label('fecha_ingreso','fecha_ingreso')}}
        {{Form::text('fecha_ingreso',null,['class'=>'form-control'])}}
        {{Form::label('fecha_entrega','fecha_entrega')}}
        {{Form::text('fecha_entrega',null,['class'=>'form-control'])}}
        {{Form::label('procedimiento','procedimiento')}}
        {{Form::text('procedimiento',null,['class'=>'form-control'])}}

</div>
<div class="form-group">
        {{Form::label('entrada_cucharon','entrada_cucharon')}}
        {{Form::file('entrada_cucharon') }}
</div>
