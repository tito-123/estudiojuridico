<div class="table-responsive">
    <table class="table" id="tramiteadmis-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Descripcion</th>
        <th>Tipotramite</th>
        <th>Estado</th>
        <th>Personas</th>
        <th>Cita</th>
        <th>cliente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tramiteadmis as $tramiteadmi)
            <tr>
                <td>{{ $tramiteadmi->nombre }}</td>
            <td>{{ $tramiteadmi->descripcion }}</td>
            <td>{{ $tramiteadmi->tipotramite }}</td>
            <td>{{ $tramiteadmi->estado }}</td>
            <td>{{ $tramiteadmi->personas }}</td>
            <td>{{ $tramiteadmi->cita }}</td>
            <td>{{ $tramiteadmi->nombrecli }} {{ $tramiteadmi->apellido }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tramiteadmis.destroy', $tramiteadmi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tramiteadmis.show', [$tramiteadmi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tramiteadmis.edit', [$tramiteadmi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>

                        
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
