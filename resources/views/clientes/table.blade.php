<div class="table-responsive">
    <table class="table" id="clientes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Ci</th>
        <th>Telefono</th>
        <th>Domicilio</th>
        <th>Iduser</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->ci }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->domicilio }}</td>
            <td>{{ $cliente->iduser }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$cliente->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}" class='btn btn-default btn-xs'>
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
