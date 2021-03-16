<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-8 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipotramite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipotramite', 'Tipotramite:') !!}
    {!! Form::text('tipotramite', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Personas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas', 'Personas:') !!}
    {!! Form::text('personas', null, ['class' => 'form-control']) !!}
</div>

<!-- Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cita', 'Cita:') !!}
    {!! Form::text('cita', null, ['class' => 'form-control','id'=>'cita']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('idcliente', 'Cliente:') !!}
      <select class="form-control select2" id="idcliente" name="idcliente" class="form-control{{ $errors->has('idcliente') ? ' is-invalid' : '' }}" value="{{ old('idcliente') }}" required autofocus"  >
                             
                               @if (isset($cliente2))
                           <option value="{{ $cliente2->id }}">{{ $cliente2->nombre }} {{ $cliente2->apellido }}</option>
                            @else
                              <option value="">-- SELECCIONE UNA OPCION --</option>
                            @endif
                      
                         @foreach($clientes as $cliente)
         <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
               
                @endforeach
                  
                </select>
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#cita').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush