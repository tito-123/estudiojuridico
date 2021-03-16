<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tramiteadmi->nombre }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $tramiteadmi->descripcion }}</p>
</div>

<!-- Tipotramite Field -->
<div class="col-sm-12">
    {!! Form::label('tipotramite', 'Tipotramite:') !!}
    <p>{{ $tramiteadmi->tipotramite }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $tramiteadmi->estado }}</p>
</div>

<!-- Personas Field -->
<div class="col-sm-12">
    {!! Form::label('personas', 'Personas:') !!}
    <p>{{ $tramiteadmi->personas }}</p>
</div>

<!-- Cita Field -->
<div class="col-sm-12">
    {!! Form::label('cita', 'Cita:') !!}
    <p>{{ $tramiteadmi->cita }}</p>
</div>

<!-- Idcliente Field -->
<div class="col-sm-12">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    <p>{{ $tramiteadmi->idcliente }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tramiteadmi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tramiteadmi->updated_at }}</p>
</div>

