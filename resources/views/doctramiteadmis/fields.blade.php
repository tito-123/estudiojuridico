<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Clase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clase', 'Clase:') !!}
    {!! Form::text('clase', null, ['class' => 'form-control']) !!}
</div>

<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento', 'Documento:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('documento', ['class' => 'custom-file-input']) !!}
            {!! Form::label('documento', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Idtramiteadmi Field -->

<div class="form-group col-sm-6">
    {!! Form::label('idtramiteadmi', 'Cliente:') !!}
      <select class="form-control select2" id="idtramiteadmi" name="idtramiteadmi" class="form-control{{ $errors->has('idtramiteadmi') ? ' is-invalid' : '' }}" value="{{ old('idtramiteadmi') }}" required autofocus"  >
                             
                               @if (isset($cliente2))
                           <option value="{{ $cliente2->id }}">{{ $cliente2->nombre }} {{ $cliente2->apellido }}</option>
                            @else
                              <option value="">-- SELECCIONE UNA OPCION --</option>
                            @endif
                      
                         @foreach($tramiteadmis as $tramiteadmi)
         <option value="{{ $tramiteadmi->id }}">{{ $tramiteadmi->nombrecli }} {{ $tramiteadmi->apellido }} - {{ $tramiteadmi->nombre }}</option>
               
                @endforeach
                  
                </select>
</div>