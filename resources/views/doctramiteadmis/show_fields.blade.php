<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $doctramiteadmi->nombre }}</p>
</div>

<!-- Tipo Field -->
<div class="col-sm-12">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{{ $doctramiteadmi->tipo }}</p>
</div>

<!-- Clase Field -->
<div class="col-sm-12">
    {!! Form::label('clase', 'Clase:') !!}
    <p>{{ $doctramiteadmi->clase }}</p>
</div>

<!-- Documento Field -->
<div class="col-sm-12">
    {!! Form::label('documento', 'Documento:') !!}
    <p>{{ $doctramiteadmi->documento }}</p>
</div>

<!-- Idtramiteadmi Field -->
<div class="col-sm-12">
    {!! Form::label('idtramiteadmi', 'Idtramiteadmi:') !!}
    <p>{{ $doctramiteadmi->idtramiteadmi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $doctramiteadmi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $doctramiteadmi->updated_at }}</p>
</div>

