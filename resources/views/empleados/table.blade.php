<div class="table-responsive">
    <table class="table" id="empleados-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Ci</th>
        <th>Telefono</th>
        <th>Iduser</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->ci }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>{{ $empleado->iduser }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empleados.show', [$empleado->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('empleados.edit', [$empleado->id]) }}" class='btn btn-default btn-xs'>
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
