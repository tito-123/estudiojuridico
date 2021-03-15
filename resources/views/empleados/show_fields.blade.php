<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $empleado->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $empleado->apellido }}</p>
</div>

<!-- Ci Field -->
<div class="col-sm-12">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{{ $empleado->ci }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $empleado->telefono }}</p>
</div>

<!-- Iduser Field -->
<div class="col-sm-12">
    {!! Form::label('iduser', 'Iduser:') !!}
    <p>{{ $empleado->iduser }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $empleado->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $empleado->updated_at }}</p>
</div>

